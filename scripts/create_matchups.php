<?php

/**
 *	Script to generate matchups
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();
$round_id = 5;
$path_to_xml = __DIR__. '/../data/debates'.$round_id.'-main.xml';
$xml = simplexml_load_file($path_to_xml);
$matches = $xml->debate;
$adjs_raw_data = $xml->adjudicators->pair;

foreach ($matches as $match) {
	$teams = $match->team;
	$venue_id = (int) $match->attributes()->venue;
	$position_id = 1;
	/*
		Position_id | Position
		1 - OG
		2 - OO
		3 - CG
		4 - CO
	*/
	foreach ($teams as $team) {
		$team_id = (int) $team->attributes()->id;
		InsertEntryInTheDB($round_id, $team_id, $position_id, $venue_id);
		$position_id++;
	}
	echo 'Finished inserting matchup: '. $venue_id . PHP_EOL;
}


foreach ($adjs_raw_data as $data) {
	$adj_id = (int) $data->attributes()->adj;
	$venue_id = (int) $data->attributes()->venue;
	InsertAdjInTheDB($round_id, $adj_id, $venue_id);
	echo 'Finished inserting adj with adj_id: '. $adj_id . ' with venue_id: '. $venue_id . PHP_EOL;
}

function InsertAdjInTheDB($round_id, $adj_id, $venue_id) {
	global $DB;
	$DB->execute("
		INSERT INTO matches_judges (round_id, adj_id, venue_id)
		VALUES (?,?,?);", 
		array($round_id, $adj_id, $venue_id)
	);
}

function InsertEntryInTheDB($round_id, $team_id, $position_id, $venue_id) {
	global $DB;
	$DB->execute("
		INSERT INTO matchups (round_id, team_id, position_id, venue_id)
		VALUES (?,?,?,?);", 
		array($round_id, $team_id, $position_id, $venue_id)
	);
}

