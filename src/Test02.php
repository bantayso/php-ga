<?php
	error_reporting(E_ALL);
	
	ini_set("display_errors", 1);
	
	require_once("autoload.php");
	
	use UnitedPrototype\GoogleAnalytics;
		
	$tracker = new GoogleAnalytics\Tracker("UA-43023604-1", "jeanpaulruizvallejo.com/site/");
	
	$event = new GoogleAnalytics\Event();
	$event->setCategory("Checkout");
	$event->setAction("Payment Failure");
	$event->setLabel("Testing from AWS via PHP");
	$event->setValue(1);
	$event->setNoninteraction(true);
	
	$session = new GoogleAnalytics\Session();
	
	$visitor = new GoogleAnalytics\Visitor();
	$visitor->setIpAddress($_SERVER["REMOTE_ADDR"]);
	$visitor->setUserAgent($_SERVER["HTTP_USER_AGENT"]);
	$visitor->setScreenResolution("1024x768");
	
	$tracker->trackEvent($event, $session, $visitor);
?>