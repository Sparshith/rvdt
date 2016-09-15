<?php

require_once(dirname(__FILE__).'/../Mobile_Detect.php');
$detect = new Mobile_Detect;

if($detect->isMobile() && !$detect->isTablet()) {
	$user_device = 'mobile';
} elseif($detect->isTablet()) {
	$user_device = 'tablet';
} else {
	$user_device = 'desktop';
}


?>