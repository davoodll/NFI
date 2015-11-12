<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Kampanje</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/content.js"></script>
	<script type="text/javascript" src="js/img.js"></script>
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
					<a href="http://autodromoimola.com/" target="_blank"><img src="img/banekjoringsbanner.jpg" id="banekjoringsbanner" alt="Banner for banekjøring"></a>
					<div class="switch">
						<p id="on1">Kampanje-banekjøring&nbsp;"Les"</p>
						<p id="off1a">Kampanje-banekjøring&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h1>Kampanje</h1>
						<h2>Tur til Italia og verdenskjente Autodromo Enzo e Dino Ferrari</h2>
						<h3>Vær racingsjåfør for en dag!</h3>
						<p> Spenn fast sikkerhetsbeltet og begi deg ut på en helg fylt med fart, spenning og herlig adrenalin med oss i Norsk Ferrari Import!
							Bilen du har bestilt, står med nøkkelen i tenningen, klar på startstreken. Destinasjonen er Italia og verdenskjente Autodromo Enzo
							e Dino Ferrari, En av Italias gjeveste racingtracks! Her vil du kunne teste bilen din til det ytterste, og virkelig kjenne kraften og
							de fantastiske kjøreegenskapene som følger. Dette er din mulighet til å være racing-sjåfør for en dag, så dette bør du virkelig
							ikke gå glipp av!

						</p>
						<p class="off" id="off1b">Kampanje-banekjøring&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on2">Program&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off2a">Program&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content2">
						<h2>Program</h2>
						<div id="program">

							<ul class="program">
								<li><h3>Fredag 3. mai 2013:</h3></li>
								<li>13:00 - Oppmøte Gardemoen</li>
								<li>14:30 - Flyavgang</li>
								<li>16:30 - Ankomst Italia</li>
								<li>17:00 - Transport til hotell</li>
								<li>18:30 - Middag/måltid</li>
							</ul>
							<ul class="program">
								<li><h3>Lørdag 4. mai 2013:</h3></li>
								<li>07:30-09:00 - Frokost</li>
								<li>09:30 - Transport til banekjøring</li>
								<li>10:00 - Opplæring</li>
								<li>12:15 - lunsj</li>
								<li>13:00 - Banekjøring</li>
								<li>17:00 Transport tilbake til hotell</li>
								<li>19:00 - Middag</li>

							</ul>
							<ul class="program">
								<li><h3>Søndag 5. mai 2013:</h3></li>
								<li>07:30-09:00 - Frokost</li>
								<li>16:30 - Transport til flyplass</li>
								<li>18:30 - Flyavgang</li>
								<li>21:00 - Ankomst gardemoen</li>
							</ul>

						</div>
						<p class="off" id="off2b">Program&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on3">Inkludert&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off3a">Inkludert&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content3">
						<div id="kampanjenInkluderer">
							<p>
								Kampanjen inkluderer: Flyreise, hotell, transport i Italia, mat og drikke, 2 timer opplæring + 20 runder banekjøring.
							</p>
							<p>
								<small>(*Alle som kjøper bil gjennom oss innen 01.01.2013, kvalifiserer til denne kampanjen!)</small>
							</p>
						</div>
						<p class="off" id="off3b">Inkludert&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>

