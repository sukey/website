
<?php
/*
//NOT fair to FORCE mobile redirect when protest not on! On a protest, this detects mobile browsers and redirect to the app.

include("detectMobile.php");
if(isMobile()){header("Location: https://sukey.org/webapp/");}
*/
$id=$_GET['id'];
if(!isset($_GET['id'])){$id = 'Homepage';}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

	<head> 

		<title>Sukey - Keeping demonstrators safe, mobile & informed.</title> 
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" /> 
		<meta name="description" content="Sukey is a mapping and reporting tool designed to keep demonstrators safe, mobile & informed." /> 
		<meta name="keywords" content="Sukey, protest map, live protest, kettling, GIS, demo2011, demonstrations, #sukey, sukeyData" /> 
		<meta name="robots" content="index, follow" /> 
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" media="screen" href="/css/screen.css" type="text/css"/>
  <link rel="alternate" type="application/rss+xml" title="Sukey - Keeping demonstrators safe, mobile & informed" href="https://sukeyupdates.blogspot.com/feeds/posts/default/" />
	
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:regular,bold' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="/scripts/ga.js"></script>
		<!--[if lte IE 6]>
			<script type="text/javascript" src="supersleight-min.js"></script>
		<![endif]-->
	</head>

	<body onload="supersleight.init()"> 

		<div id="container">

			<div id="header">  
				<div id="navbar"><?php include_once("php/navigation.php");?></div>
			</div>

			<div id="support">
				<ul>
					<li><a href="https://youtube.com/user/sukeyorg/" target="_blank"><img src="/images/sukeyoutube.png" alt="Youtube"/></a></li>
					<li><a href="https://twitter.com/sukeyio" target="_blank"><img src="/images/sukeytwitter.png" alt="Twitter"/></a></li>
					<li><a href="https://sukeyio.blogspot.com/feeds/posts/default/" target="_blank"><img src="/images/sukeyrss.png" alt="RSS"/></a></li>
				</ul>
			</div> 
			<div class="colmask rightmenu"> 
				<div class="colleft"> 
					<div class="col1">
						<div id="content">
							<?php include_once("php/$id.php");?>
						</div>
					</div> 

					<div class="col2"> 
					</div>
				</div> 
			</div> 
			<div id="footer">

				<div id="f1">
					<h3>Sitemap</h3> 
					<div id="f1a">
						<ul> 
							<li><a href="https://sukey.org/">Home</a></li> 
							<li><a href="https://sukey.org/what">What is Sukey?</a></li> 
						</ul>
					</div>
					<div id="f1b">
						<ul>
							<li><a href="https://twitter.com/sukeyio" target="_blank">Twitter</a></li> 
							<li><a href="https://www.facebook.com/sukeyio" target="_blank">Facebook</a></li>
						</ul>
					</div>
				</div>
	
				<div id="f2">
					<h3>News &amp; Updates</h3> 
					<ul>					
						<li><a href="http://sukeyio.blogspot.co.uk/">Sukey Blog</a></li>
						<li><a href="/articles">Sukey in the Press</a></li> 
					</ul>
				</div>
	
				<div id="f3">
					<h3>About Us</h3>
					<ul>
						<li><a href="/what">About</a></li> 
						<li><a href="/contact">Contact</a></li> 
						<li><a href="/what">FAQ</a></li>
					</ul>
				</div>

			</div> 
		</div>

	</body> 

</html> 
