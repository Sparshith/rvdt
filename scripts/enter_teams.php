<?php

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();

$path_to_xml = __DIR__. '/../data/teams1-main.xml';
$xml = simplexml_load_file($path_to_xml);
$teams = $xml->team;

foreach ($teams as $team) {
	$team_id = (int) $team->attributes()->ident;
	$team_name = (string) $team->attributes()->name;
	InsertEntryInTheDB($team_id, $team_name);
	echo 'Finished inserting team: '. $team_name . ' with team_id: '. $team_id . PHP_EOL;
}

function InsertEntryInTheDB($team_id, $team_name) {
	global $DB;
	$DB->execute("
		INSERT INTO teams (team_id, team_name)
		VALUES (?,?);", 
		array($team_id, $team_name)
	);
}