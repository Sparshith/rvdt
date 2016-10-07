<?php

/**
 *	Script to add teams
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();

$path_to_xml = __DIR__. '/../data/teams1-main.xml';
$xml = simplexml_load_file($path_to_xml);
$teams = $xml->team;

foreach ($teams as $team) {
	$team_id = (int) $team->attributes()->ident;
	$team_name = (string) $team->attributes()->name;
	$members = $team->member;
	$speaker1 = (string) trim($members[0]->attributes()->name);
	$speaker2 = (string) trim($members[1]->attributes()->name);
	InsertEntryInTheDB($team_id, $team_name, $speaker1, $speaker2);
	echo 'Finished inserting team: '. $team_name . ' with team_id: '. $team_id . PHP_EOL;
}

function InsertEntryInTheDB($team_id, $team_name, $speaker1, $speaker2) {
	global $DB;
	$DB->execute("
		INSERT INTO teams (team_id, team_name)
		VALUES (?,?);", 
		array($team_id, $team_name)
	);

	$DB->execute("
		INSERT into speakers (team_id, speaker_name)
		VALUES (?, ?), (?, ?);",
		array($team_id, $speaker1, $team_id, $speaker2)
	);
}
