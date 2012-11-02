<?php

	include("./apiParams.php");

	$array = scandir($announcement_dir);
	rsort($array);

	$tweets = array_slice($array,0,$cycleperiod);

	$r  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
	$r .= "<feed xmlns:atom=\"http://www.w3.org/2005/Atom\">\n";

	foreach($tweets as $file){
		$d = explode(".", $file);
		$r .= "\t<atom:entry>\n";
		$r .= "\t\t<atom:title type=\"html\">" . file_get_contents($announcement_dir.$file) . "</atom:title>\n";
		$r .= "\t\t<atom:published>{$d[0]}</atom:published>\n";
		$r .= "\t</atom:entry>\n";
	}
	$r .= "</feed>";

	echo $r;

?>
