<?php

	/* 
		Name: 		saveTwitterRss.php
		Author: 	SG
		Description:	Saves stripped down local copy of our RSS feed from Twitter.
				Run by a cronjob every 1 minute.
		Args:		num:	number of tweets to be returned
	*/
	

	date_default_timezone_set("Europe/London");

	chdir(dirname(__FILE__));

	include_once("./apiParams.php");

	$Url = "http://twitter.com/statuses/user_timeline/{$twitter_id}.rss";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $Url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$output = str_replace("\n","",curl_exec($ch));
	curl_close($ch);

	preg_match_all("|<item>(.*?)<title>{$twitter_user}: (.*?)</title>(.*?)<pubDate>(.*?)</pubDate>(.*?)</item>|",$output,$matches);

	$r  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$r .= "<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">\n";
	$i = 0;
	foreach($matches[2] as $num => $announcement){
		$r .= "\t<item>\n";
		$r .= "\t\t<title>$announcement</title>\n";
		$r .= "\t\t<pubDate>" . strtotime($matches[4][$num]) . "</pubDate>\n";
		$r .= "\t</item>\n";
		$i++;
		if($i==$_GET['num']){
			break;
		}
	}
	$r .= "</rss>";

	$f = "../feed.rss";

	if(md5_file($f)!=md5($r)){
		file_put_contents($f,$r);
	}

?>
