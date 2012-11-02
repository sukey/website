<?php

	include("./apiParams.php");
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/xml');

	$array = scandir($announcement_dir);
	rsort($array);

	$tweets = array_slice($array,0,$cycleperiod);

	$r  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
	$r .= "<sukey version=\"{$ver}\">\n";
	$r .= "<announces>\n";

	foreach($tweets as $file){
		$d = explode(".", $file);
		$r .= "\t<announce>\n";
		$r .= "\t\t<tickertext>" . file_get_contents($announcement_dir.$file) . "</tickertext>\n";
		$r .= "\t\t<published>{$d[0]}</published>\n";
		$r .= "\t</announce>\n";
	}
	$r .= "</announces>";
	$r .= "</sukey>";

	echo $r;

?>
