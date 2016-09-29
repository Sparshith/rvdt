<?php

/**
 *	Script to add judges
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

include __DIR__ . '/../class.DBPDO.php';
include __DIR__. '/../includes/settings.php';

$DB = new DBPDO();

$path_to_xml = __DIR__. '/../Data/adjudicators6-main.xml';
$xml = simplexml_load_file($path_to_xml);
$judges = $xml->adjud;

foreach ($judges as $judge) {
	$adj_id = (int) $judge->attributes()->id;
	$adj_name = (string) $judge->attributes()->name; 
	InsertEntryInTheDB($adj_id, $adj_name);
	echo 'Finished inserting judge: '. $adj_name . ' with adj_id: '. $adj_id . PHP_EOL;
}


function InsertEntryInTheDB($adj_id, $adj_name) {
	print_r(array($adj_id, $adj_name));
	global $DB;
	$DB->execute("
		INSERT INTO judges (adj_id, adj_name)
		VALUES (?,?);", 
		array($adj_id, $adj_name)
	);
}