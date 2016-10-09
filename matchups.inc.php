<?php

include 'includes/application_top.php';
$DB = new DBPDO();

$round_id = isset($_GET['round_id']) && $_GET['round_id'] ? (int) $_GET['round_id'] : 1;

$matchups_raw_data = $DB->fetchAll("SELECT * FROM `matchups` WHERE round_id = ? ORDER BY venue_id, position_id", array($round_id));
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");
$venues_raw_data =  $DB->fetchAll("SELECT * FROM `venues`");
$judges_raw_data = $DB->fetchAll("SELECT * FROM `matches_judges` WHERE round_id = ?", array($round_id));
$judges_mapping_data = $DB->fetchAll("SELECT * FROM `judges`");

$total_rounds = 5;

$round_header = 'Round '. $round_id;
$_title = $round_header . ' | RVDT 2016';

$teams = array();
foreach ($teams_raw_data as $data) {
  $teams[$data['team_id']] = $data['team_name'];
}

$venues = array();
foreach ($venues_raw_data as $data) {
  $venues[$data['venue_id']] = $data['venue_name'];
}

$matchups = array();
foreach ($matchups_raw_data as $data) {
  $matchups[$data['venue_id']][$data['position_id']] = $data['team_id'];
}

$judges_mapping = array();
foreach ($judges_mapping_data as $data) {
    $judges_mapping[$data['adj_id']] = $data['adj_name'];
}

$judges = array();
/*
    Shady logic to recognize chairs, pls change.
*/
foreach ($judges_raw_data as $data) {
    if(!isset($judges[$data['venue_id']])) {
        $judges[$data['venue_id']][] = "<b>".$judges_mapping[$data['adj_id']]. "</b>";
    } else {
        $judges[$data['venue_id']][] = $judges_mapping[$data['adj_id']];
    }
}


$table_contents = '';

foreach($matchups as $venue_id => $matchup) {
    $judges_str = implode(", ", $judges[$venue_id]);
    $table_contents .= '
        <tr>
            <td>'.$venues[$venue_id].'</td>
            <td>'.$teams[$matchup[1]].'</td>
            <td>'.$teams[$matchup[2]].'</td>
            <td>'.$teams[$matchup[3]].'</td>
            <td>'.$teams[$matchup[4]].'</td>
            <td>'.$judges_str.'</td>
        </tr>
    ';
}

$footer_class = $user_device != 'mobile' ? 'right floated' : '';

$table_footer =
'<tr>
    <th colspan="6">
        <div class="ui pagination '. $footer_class .' menu">';

if($round_id !== 1) {
    $prev_round = $round_id - 1;
    $table_footer .= '
            <a href="/matchups?round_id='. $prev_round .'" class="icon item">
                <i class="left chevron icon"></i>
            </a>
    ';   
}

for($i = 1; $i <= $total_rounds; $i++) {
    if($round_id != $i) {
        $table_footer .=
            '<a href="/matchups?round_id='.$i.'" class="item">'. $i .'</a>';
    } elseif($round_id == $i) {
        $table_footer .=
            '<a href="/matchups?round_id='.$i.'" class="active item">'. $i .'</a>';
    }
}

if($round_id != $total_rounds) {
    $next_round =  $round_id + 1;
    $table_footer .= '
            <a href="/matchups?round_id='. $next_round .'" class="icon item">
                <i class="right chevron icon"></i>
            </a>
    ';                
}

$table_footer .=
    '
        </div>
    </th>
</tr>';




