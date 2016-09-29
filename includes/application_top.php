<?php

include __DIR__ . '/../Mobile_Detect.php';
include __DIR__ . '/settings.php';
include __DIR__ . '/../class.DBPDO.php';
include __DIR__ . '/analyticstracking.php';

$detect = new Mobile_Detect;

if($detect->isMobile() && !$detect->isTablet()) {
	$user_device = 'mobile';
} elseif($detect->isTablet()) {
	$user_device = 'tablet';
} else {
	$user_device = 'desktop';
}

?>