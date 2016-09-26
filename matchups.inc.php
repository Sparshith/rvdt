<?php

include 'includes/application_top.php';
$_title = 'Matchups | RVDT 2016';
$DB = new DBPDO();


$matchups_raw_data = $DB->fetchAll("SELECT * FROM `matchups` WHERE round_id = 1 ORDER BY match_id, position_id");
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");

$teams = array();
foreach ($teams_raw_data as $data) {
  $teams[$data['team_id']] = $data['team_name'];
}

$matchups = array();
foreach ($matchups_raw_data as $data) {
  $matchups[$data['match_id']][$data['position_id']] = $data['team_id']; 
}



$table_contents = '';

foreach($matchups as $matchup) {
  $table_contents .= '
     <tr>
        <td>Venue</td>
        <td>'.$teams[$matchup[1]].'</td>
        <td>'.$teams[$matchup[2]].'</td>
        <td>'.$teams[$matchup[3]].'</td>
        <td>'.$teams[$matchup[4]].'</td>
      </tr>
  ';
}
