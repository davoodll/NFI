<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Om oss</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/content.js"></script>
	</head>
	<body>
	<div id="everything">
 		<?php include "php-include/header.php";?>
			<div id="wrapper">
				<?php $print = $_COOKIE['device'];
				if($print==mobile){
				include "php-include/menu_mobile.php";}
				elseif($print==screen){
				include "php-include/menu_desktop.php";}
				else{
				include "php-include/menu_mobile.php";
				include "php-include/menu_desktop.php";}
				?>
				<div id="content">
					<div class="switch">
						<p id="on1">Om oss&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Om oss&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h1>Om Norsk Ferrari Import</h1>
						<p>Norsk Ferrari import jobber for å introdusere det norske folk for superbiler av merket Ferrari.
						Vi har en rekke modeller på lager, og kan hjelpe til med å skreddersy og importere de fleste typer Ferrarier etter ditt ønske!
						</p>
						<p>Vi har lang erfaring med import av biler og deler din lidenskap for bil. Vi startet opp med å importere bruktbiler fra Italia
						allerede i 2007 og har over 100 fornøyde  kunder av importbiler i av alle merker.
						I 2011 bestemte vi oss for å fokusere kun på Ferrari, for å gi deg som Ferrari-entusiast all den informasjon og kompetanse du leter etter.
						</p>
						<p>Vi er opptatt av kvalitet, stolthet og tradisjoner. Alle Ferrarier er godt utstyrt, med alt av teknologi, banebrytende kjøreegenskaper og
						fantastisk eleganse. Ved å la oss hjelpe deg, kan vi garantere en uslåelig bilopplevelse.</p>
						<p class="off" id="off1b">Om oss&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on2">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Vis"</p>
						<p id="off2a">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content2">
						<iframe
						src="http://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Pilestredet+35,+Oslo&amp;aq=0&amp;oq=pilestredet+35&amp;sll=64.55875,17.70995&amp;sspn=30.925285,104.853516&amp;ie=UTF8&amp;hq=&amp;hnear=Pilestredet+35,+Sentrum,+0166+Oslo&amp;ll=59.919613,10.734978&amp;spn=0.001062,0.0032&amp;t=m&amp;z=17&amp;output=embed">
						</iframe><br />
						<small>
						<a href="http://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=Pilestredet+35,+Oslo&amp;aq=0&amp;oq=pilestredet+35&amp;sll=64.55875,17.70995&amp;sspn=30.925285,104.853516&amp;ie=UTF8&amp;hq=&amp;hnear=Pilestredet+35,+Sentrum,+0166+Oslo&amp;ll=59.919613,10.734978&amp;spn=0.001062,0.0032&amp;t=m&amp;z=14">Se kartet på Google maps</a>
						</small>
						<p class="off" id="off2b">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on3">Tweet`s&nbsp;&nbsp;"Les"</p>
						<p id="off3a">Tweet`s&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content3">
						<div id="twitter_div">
							<h2 class="twitter-title">Siste tweet`s</h2>
							<ul id="twitter_update_list"></ul>
							<div id="twitter-link"><a href="http://twitter.com/markedsavdeling">følg NFI på Twitter</a></div>
						</div>
						<p class="off" id="off3b">Tweet`s&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline/markedsavdeling.json?callback=twitterCallback2&amp;count=5"></script>
	</body>
</html>
