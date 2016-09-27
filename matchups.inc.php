<?php

include 'includes/application_top.php';
$_title = 'Matchups | RVDT 2016';
$DB = new DBPDO();

$round_id = isset($_GET['round_id']) && $_GET['round_id'] ? (int) $_GET['round_id'] : 1;

$matchups_raw_data = $DB->fetchAll("SELECT * FROM `matchups` WHERE round_id = ? ORDER BY match_id, position_id", array($round_id));
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");
$venues_raw_data =  $DB->fetchAll("SELECT * FROM `venues`");
$total_rounds = 5;


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
  $matchups[$data['match_id']][$data['position_id']] = $data['team_id']; 
  $matchups[$data['match_id']]['venue_id'] = $data['venue_id'];
}


$table_contents = '';

foreach($matchups as $matchup) {
    $table_contents .= '
        <tr>
            <td>'.$venues[$matchup['venue_id']].'</td>
            <td>'.$teams[$matchup[1]].'</td>
            <td>'.$teams[$matchup[2]].'</td>
            <td>'.$teams[$matchup[3]].'</td>
            <td>'.$teams[$matchup[4]].'</td>
        </tr>
    ';
}

$table_footer =
'<tr>
    <th colspan="5">
        <div class="ui right floated pagination menu">';

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




