<?php

include 'includes/application_top.php';
$DB = new DBPDO();
$team_id = isset($_GET['team_id']) && $_GET['team_id'] ? (int) $_GET['team_id'] : 1;

$matchups_data = $DB->fetchAll("SELECT round_id, venue_id FROM `matchups` WHERE team_id = ? ORDER BY round_id", array($team_id));
$teams_raw_data =  $DB->fetchAll("SELECT * FROM `teams`");
$venues_raw_data =  $DB->fetchAll("SELECT * FROM `venues`");
$judges_mapping_data = $DB->fetchAll("SELECT * FROM `judges`");



$teams = array();
foreach ($teams_raw_data as $data) {
  $teams[$data['team_id']] = $data['team_name'];
}

$team_name = $teams[$team_id];
$_title = 'Matchups for Team: '. $team_name;

$venues = array();
foreach ($venues_raw_data as $data) {
  $venues[$data['venue_id']] = $data['venue_name'];
}


$judges_mapping = array();
foreach ($judges_mapping_data as $data) {
    $judges_mapping[$data['adj_id']] = $data['adj_name'];
}

$matchups_content = '';

/*
Display match round wise
*/
foreach ($matchups_data as $data) {
	$matchups_raw_data = $DB->fetchAll("SELECT * FROM `matchups` WHERE round_id = ? AND venue_id = ? ORDER BY  position_id", array($data['round_id'], $data['venue_id']));
	$judges_raw_data = $DB->fetchAll("SELECT * FROM `matches_judges` WHERE round_id = ? AND venue_id = ?", array($data['round_id'], $data['venue_id']));

	$judges = array();
	/*
	    Shady logic to recognize chairs, pls change.
	*/
	foreach ($judges_raw_data as $judge_data) {
	    if(!isset($judges[$judge_data['venue_id']])) {
	        $judges[$judge_data['venue_id']][] = "<b>".$judges_mapping[$judge_data['adj_id']]. "</b>";
	    } else {
	        $judges[$judge_data['venue_id']][] = $judges_mapping[$judge_data['adj_id']];
	    }
	}
	$judges_str = implode(", ", $judges[$data['venue_id']]);

	$round_header = 'Round '. $data['round_id'];
	$matchups_content .= '
		<div class="ui header">
           '.$round_header.'
        </div>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Venue</th>
                    <th>Opening Government</th>
                    <th>Opening Oppposition</th>
                    <th>Closing Government</th>
                    <th>Closing Opposition</th>
                    <th>Judges</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>'.$venues[$data['venue_id']].'</td>
            		<td>'.$teams[$matchups_raw_data[0]['team_id']].'</td>
            		<td>'.$teams[$matchups_raw_data[1]['team_id']].'</td>
            		<td>'.$teams[$matchups_raw_data[2]['team_id']].'</td>
            		<td>'.$teams[$matchups_raw_data[3]['team_id']].'</td>
            		<td>'.$judges_str.'</td>
            	</tr>
            </tbody>
    	</table>
	';
}