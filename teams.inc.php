<?php

include 'includes/application_top.php';

$DB = new DBPDO();
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");
$_title =  'Teams | RVDT 2016';

$teams = array();
foreach ($teams_raw_data as $data) {
  	$teams[$data['team_id']]['name'] = $data['team_name'];
}

$table_contents = '';

foreach ($teams as $team_id => $team_details) {
	$table_contents .= '
        <tr>
            <td><a href="/team?team_id='.$team_id.'">'.$team_details['name'].'</a></td>
            <td>'.'Speaker 1'.'</td>
            <td>'.'Speaker 2'.'</td>
        </tr>
    ';
}
