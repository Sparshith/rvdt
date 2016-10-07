<?php

include 'includes/application_top.php';

$DB = new DBPDO();
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams` ORDER BY team_name");
$speakers_mapping_data = $DB->fetchAll("SELECT * FROM `speakers`");

$_title =  'Teams | RVDT 2016';

$teams = array();
foreach ($teams_raw_data as $data) {
  	$teams[$data['team_id']]['name'] = $data['team_name'];
}

$speakers_mapping = array();
foreach ($speakers_mapping_data as $data) {
   $speakers_mapping[$data['team_id']][] = $data['speaker_name'];
}

$table_contents = '';

foreach ($teams as $team_id => $team_details) {
	$table_contents .= '
        <tr>
            <td><a href="/team?team_id='.$team_id.'">'.$team_details['name'].'</a></td>
            <td>'.$speakers_mapping[$team_id][0].'</td>
            <td>'.$speakers_mapping[$team_id][1].'</td>
        </tr>
    ';
}
