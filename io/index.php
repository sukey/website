<?php

//include("detectMobile.php");
//if(isMobile()){header("Location: http://sukey.io/webapp/");}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sukeyio</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript">
function change() {
document.getElementById('splash').style.background = "url(../images/sukeyintro.gif) center no-repeat";
document.getElementById('hideme').style.display = "none";
//background: url(../images/sukeysplash.gif) center no-repeat;	
}
</script>

</head>

<body>
	<div id="splash">
		<div id="hideme" align="center">
			<a href="http://sukey.org/io/webapp/" target="_blank"><img src="images/sukey-banner-transparent.png" width="620px" class="sukey_image"></a>
		</div>
	</div>
<div align="center">
	<div id="buttons">
			<a href="http://sukey.io/webapp">
				<div id="app">
				</div>
			</a>
<!--			<a href="#" onmousedown="change()">
				<div id="app">
				</div>
			</a>   -->
			<a href="https://www.facebook.com/Sukeyio" target="_blank">
				<div id="fb">
				</div>
			</a>  
			<a href="https://twitter.com/sukeyio" target="_blank">
				<div id="twitter">
				</div>
			</a>
	</div>
</div>
</body>
</html>

