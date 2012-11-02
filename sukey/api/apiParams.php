<?php

$zonedir = "../data/";				//sets the directory in which XML files are saved (relative to API Directory).
$zoneext = ".zone";				//extension for zone files.
$zonelist = $zonedir."zonelist.xml";		//XML file containing directory of zones.

$exitdir = "../data/";				//sets the directory in which XML files are saved (relative to API Directory).
$exitext = ".exit";				//extension for exit files.
$exitlist = $exitdir."zonelist.xml";		//XML file containing directory of exit.

$mapext = ".map";				//extension for map files.

$exitdir = "../data/";
$exitext = ".exit";
$exitlist = $exitdir."exitlist.xml";

$announcement_dir = "../data/announcements/";	//Directory to store announcement files
$twitter_user = "sukeyio"; 			//Twitter username.
$twitter_id = "239762127";			//Twitter id for RSS.
$feed_path = "../feed.rss";			//Where to save twitter RSS feed (relative to API Directory).
$cycleperiod = 5;				//Amount of announcments scrolled  |- (itemtime+1000)*cycleperiod = milliseconds for announcement set refresh
$itemtime = 5000;				//Time per announcement

$protesterdir = "../data/protester/"; 		//sets the directory in which Protester XML files are saved (relative to API Directory).
$protesterhistdir = "../data/protesterhist/"; 	//sets the directory in which Protester XML files are saved (relative to API Directory).
$protesterext = ".protester"; 			//extension for protester files.

$kmldir = "../data/kml/"; 			//sets the directory in which KML files are saved (relative to API Directory).
$kmlext = ".kml";				//extension for kml files.

$mediadir = "../data/media/";

$ver = "1.2";
?>
