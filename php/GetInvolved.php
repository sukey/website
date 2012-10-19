<?php

if( (!isset($_GET['p'])) || ($_GET['p']=="") ){

?><h2>Getting Involved</h2>

<p>Spread the word on Social Media by:<p>
<p><a target="_blank" href="https://twitter.com/home?status=%23sukey">Tweeting about us</a>.</p>
<p><a href="http://twibbon.com/join/sukey">Grabbing the Twibbon</a>.</p>
<p><a target="_blank" href="http://www.facebook.com/sukey.org">Liking us on Facebook</a>.</p>
<p>You can get in touch with us by email: sukey dot org at gmail dot com. Our PGP key is <a target="_blank" href="http://pgp.mit.edu:11371/pks/lookup?op=get&search=0xD794F2C335BC3E12">here</a></p>

<p class="largetext"><a href="/getinvolved/in">how to send information to us</a></p>

<p class="largetext"><a href="/getinvolved/out">how we send information to you</a></p>

<?php

}elseif($_GET['p']=="in"){

?><h2>How to send information to us</h2>

<p><a href="/getinvolved/out">Go to "How we send information to you"</a> | <a href="/getinvolved">Back to Getting Involved</a></p>

<p>The tips you send us are most useful when they contain a concise description of what's happening and a clear reference to where. For example:</p>

<blockquote class="bad">
<b>NO: </b> there are horses and police!!!!!
</blockquote>

<blockquote class="good">
<b>YES: </b> a line of 20 riot police has formed north of the cenotaph
</blockquote>

<p>We collect data from lots of sources:</p>

<ul class="gapped">
	<li id="twitter-e">
		<p><b>Twitter</b></p>
		<p>If you have location services (GPS etc) for your tweeting please turn it on!</p>
		<p>We're primarily watching for tweets containing <a target="_blank" href="http://twitter.com/home?status=%40sukeyData"><i>@sukeyData</i></a>, <a target="_blank" href="http://twitter.com/home?status=%23dayx5"><i>#dayx5</i></a> and <a target="_blank" href="http://twitter.com/home?status=%23sukey"><i>#sukey</i></a>.</p>
		<p>We'll be watching incase anything else worthy of following pops up though.</p>
	</li>
	<li id="sms">
		<p><b>SMS</b></p>
		<p>Send text messages to <b>[number to be released on 29th]</b> and we'll treat them like Tweets. No need for hashtagging though.</p>
	</li>
	<li id="flickr">
		<p><b>Image Services...</b></p>
		<p>...like <a target="_blank" href="http://twitpic.com">TwitPic</a> and <a target="_blank" href="http://flickr.com">Flickr</a>. Tag your TwitPic uploads just like your tweets. Similarly, tag any Flickr pictures with <i>sukey</i> or <i>dayx5</i>.</p>
		<p>If you don't have any location services for your camera, please try to describe the location of the picture as best you can.</p>
	</li>
</ul>

<p><a href="/getinvolved/out">Go to "How we send information to you"</a> | <a href="/getinvolved">Back to Getting Involved</a></p>

<?php

}elseif($_GET['p']=="out"){

?><h2>How we send information to you</h2>

<p><a href="/getinvolved/in">Go to "How to send information to us"</a> | <a href="/getinvolved">Back to Getting Involved</a></p>

<p>Sukey can be used from Smartphones using "Roar" and from older phones from "Growl".</p>

<p>We've made a kind of interactive slideshow to explain how to use "Roar" Sukey on your smartphone. <a target="_blank" href="/tutorial">Have a look</a>, then close the window and come back.</p>

<p>To access the app, point your phone browser to</p>

<p class="largetext">http://sukey.org/a/</p>

<p>It will probably ask if it can use your GPS device. <b>Say yes</b>.</p>

<p>Also, even if you navigate to the normal URL the site should identify that it's a phone and redirect you.</p>

<p>For those of us who don't have a shiny, new phone: don't worry. We'll be sending out Tweets at an appropriate frequency for SMS from <a href="http://twitter.com/sukeySMS"><i>@sukeySMS</i></a>. Twitter provides an SMS-following service. To get important information about the protests straight to your phone,</p>

<p class="largetext">text <b>follow @sukeySMS</b> to <b>86444</b></p>

<p>It costs 10p to send the "follow" message, and 10p to send the "stop" message when you're done. Everything else is free!</p>

<p><a href="/getinvolved/in">Go to "How to send information to us"</a> | <a href="/getinvolved">Back to Getting Involved</a></p>
<?php

}

?>
