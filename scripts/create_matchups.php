<?php

/**
 *	Script to generate matchups
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();

$path_to_xml = __DIR__. '/../data/debates1-main.xml';
$xml = simplexml_load_file($path_to_xml);
$matches = $xml->debate;

$round_id = 1;
$match_id = 1;
foreach ($matches as $match) {
	$teams = $match->team;
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
		InsertEntryInTheDB($round_id, $match_id, $team_id, $position_id);
		$position_id++;
	}
	echo 'Finished inserting matchup: '. $match_id . PHP_EOL;
	$match_id++;
}

function InsertEntryInTheDB($round_id, $match_id,$team_id, $position_id) {
	global $DB;
	// print_r(array($round_id, $match_id, $team_id, $position_id));
	$DB->execute("
		INSERT INTO matchups (round_id, match_id, team_id, position_id)
		VALUES (?,?,?,?);", 
		array($round_id, $match_id, $team_id, $position_id)
	);
}

