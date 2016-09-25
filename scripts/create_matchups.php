<?php

/**
 * Cron to mark delivery orders as delivered
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */

$path_to_xml = __DIR__. '/../data/debates1-main.xml';
$xml = simplexml_load_file($path_to_xml);
print_r($xml);
die;
