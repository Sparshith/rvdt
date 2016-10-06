<?php


/**
 *	Script to create configuration file for the site
 *
 *  @author Sparshith Sampath <sparshithsampath@gmail.com>
 */


$config['site-config'] = array(
'name' => 'RV Debating Tournament 2016',
'description' => 'Best BP tournament in India'
);

$fp = fopen(__DIR__.'/../config/config.json', 'w');
fwrite($fp, json_encode($config));
fclose($fp);