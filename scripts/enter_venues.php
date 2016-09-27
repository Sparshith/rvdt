<?php

/**
 *	Script to add venues
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();

$venues_raw_data = explode(PHP_EOL, trim(file_get_contents('Data/venues1-main.dat')));
foreach ($venues_raw_data as $data) {
	$venues_data  = explode(' ', $data, 2);
	InsertEntryInTheDB($venues_data[0], $venues_data[1]);
	echo 'Finished inserting venue: '. $venues_data[1] . ' with venue_id: '. $venues_data[0] . PHP_EOL;
}


function InsertEntryInTheDB($venue_id, $venue_name) {
	global $DB;
	$DB->execute("
		INSERT INTO venues (venue_id, venue_name)
		VALUES (?,?);",
		array($venue_id, $venue_name)
	);
}