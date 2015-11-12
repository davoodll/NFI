<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Service</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/content.js"></script>
	<script type="text/javascript" src="js/verksted.js"></script>

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
						<p id="on1">Service&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Service&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
						</div>
					<div id="content1">
						<h1>SERVICE</h1>

						<p>Vi i Norsk Ferrari Import er opptatt av at våre kunder får den beste servicen mulig på produkter kjøpt hos oss.
						Derfor har vi et nært samarbeide med noen av markedets beste verksteder innenfor forskjellige kategorier:</p>

					   <ol>
					   <li>Lakk og karosseri</li>
					   <li>Dekk og Felger</li>
					   <li>Motor og drivverk</li>
					   <li>eksosrør</li>
					   <li>tuning og performance</li>
					   </ol>

					<p>Vi fungerer som et mellomledd, der du kan ta kontakt med oss, så vil vi ordne resten med våre samarbeidspartnere.</p>


					<p>Våre mekanikere bruker originalt verksted og testutstyr, og originale deler eller tilbehør med garanti,
					som gjør at du og Ferrarien din kan kjøre trygt ut på veiene. Alle reperasjoner leveres med garanti.</p>


					<p>Vi ordner også med innkalling av EU-Kontroll, hvor bilen kontrolleres for sikkerhet og miljøkrav.
					Bilen blir kalt inn 4 år etter første gangs registrering, deretter annet hvert år.</p>
					<p class="off" id="off1b">Service&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on2">Bestill time&nbsp;&nbsp;"Vis"</p>
						<p id="off2a">Bestill time&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content2">
						<h2>Få orden på bilen din, Bestill time i dag!</h2>
						<p id="service_1">Kontakt oss på telefon: 22 22 23 59 så vil vi sette opp en time så fort som mulig</p>
						<p id="service_2">Kontakt oss på telefon: 22 22 23 59 eller fyll ut skjema for <a href="javascript:open_verksted()">service</a>, så vil vi kontakte deg så fort som mulig</p>
						<p class="off" id="off2b">Bestill time&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
