<?php

include 'includes/application_top.php';
$_title = 'Matchups | RVDT 2016';
$DB = new DBPDO();

$round_id = isset($_GET['round_id']) && $_GET['round_id'] ? $_GET['round_id'] : 1;

$matchups_raw_data = $DB->fetchAll("SELECT * FROM `matchups` WHERE round_id = ? ORDER BY match_id, position_id", array($round_id));
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");
$venues_raw_data =  $DB->fetchAll("SELECT * FROM `venues`");


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
