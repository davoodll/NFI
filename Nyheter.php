<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Nyheter</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/content.js"></script>
	<script type="text/javascript" src="js/openwin.js"></script>
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
						<p id="on1">Nyheter&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Nyheter&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h1>Nyheter</h1>
						<h2>3 ferske Ferrarimodeller er på vei inn til Norsk Ferrari Import!</h2>
						<h3>Forventet levering er innen August 2013. Nedenfor får du en smakebit av skjønnhetene.</h3>
						<p class="off" id="off1b">Nyheter&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on2">599 GTO&nbsp;&nbsp;"Les"</p>
						<p id="off2a">599 GTO&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content2">
						<h3>Ferrari 599 GTO – Verdens raskeste Ferrari for gatebruk!</h3>
						<p>Med sin V12-motor som yter 670 hk og akselerasjon fra 0-100 km/t på 3,35 sekunder, og toppfart på over 335 km/t, er
						Ferarri 599 GTO den raskeste Ferrari laget for kjøring på vei noensinne!
						Ferarri 599 GTO er basert på den ekstreme 599XX, og kan nesten kalles en gateversjon av denne eksperimentelle banebilen.
						</p>
						<p>Sammenlignet med Ferrari 599 GTB Fiorano, har 599 GTO blitt slanket til bare 1495 kg gjennom tynnere aluminiumsplater,
						tynnere glass, karbonfiber, nyutviklede keramiske bremser og eksosanlegg i lys stål. Teknologioverføring fra racing-versjonen
						muligjør rundetid rundt Pista di Fiorano til 1,24, noe som klart viser det enorme potensialet i bilen. Ferrari Enzo, som tidligere
						holdt rekord vil se seg selv beseiret av et helt sekund! Chassiset er utviklet gjennom avanserte elektroniske verktøy for å handle
						i fullt samarbeid og symbiose med sjåføren. <a href="Nyheter.php" onclick="open_win()">Se bilde Ferrari 599 GTO...</a>
						</p>
						<p class="off" id="off2b">599 GTO&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on3">599 GTB&nbsp;&nbsp;"Les"</p>
						<p id="off3a">599 GTB&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content3">
						<h3>Vi presenterer Ferraris kraftigste serieproduserte V12-modell noensinne - Ferrari 599 GTB</h3>
						<p>Nye Ferrari 599 GTB er en konsentrasjon av Ferraris mest innovative og teknologisk avanserte løsninger noen sinne brukt på en toseters coupé.
						Med 599 GTB Ferrari når Ferrari en ny dimensjon når det gjelder ytelse, operatørinteraksjon og design.
						</p>
						<p>Den store 5.999 cc V12-motoren er avledet direkte fra den allerede legendariske supersportsbilen Ferrari Enzovekt-/effekt-forhold på 2,6 kg pr hk,
						og genererer 620 hk ved 7600 rpm. I kombinasjon med Ferraris allerede sterke og vektbesparende aluminiumkonstruksjon for både chassis og kropp, gir dette 599 GTB
						kjøreegenskaper av en annen verden. 599 GTB har aggressive og elegante linjer i perfekt harmoni med avanserte aerodynamiske løsninger og bruker bilens prestasjoner og potensial maksimalt.
						Det råder ingen tvil om hvem som er ansvarlig for design, nemlig Master Pininfarina. <a href="Nyheter.php" onclick="open_win2()">Se bilde Ferrari 599 GTB...</a>
						</p>
						<p class="off" id="off3b">599 GTB&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on4">Superamerica&nbsp;&nbsp;"Les"</p>
						<p id="off4a">Superamerica&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content4">
						<h3>Ferrari Superamerica</h3>
						<p>Med utgangspunkt i en 575M Maranello har Ferrari utviklet en kabrioletvariant med en original takløsning. Et glasstak vippes rundt og vips er himmelen der.
						Utgangspunktet for denne kabrioleten er en 575M Maranello. I forbindelse med innføringen av det elektrohydrauliske glasstaket har også motoren blitt tilført litt ekstra piff.
						Taket fjernes enkelt ved hjelp av en knapp inne i bilen, og hele prosessen fra kupé til kabriolet tar ikke mer enn 10 sekunder.
						</p>
						<p>Motoren er fortsatt en V12 med 5,75 liters slagvolum. Som sagt har den fått flere hestekrefter og kan nå tilby heldige eiere hele 540. Dreiemomentet er 589 newtonmeter ved 5.250 omdreininger.
						Kundene på slike biler er muligens allerede tynne i håret, men vil uansett garantert bli det med vinden fykende over issen i 320 kilometer i timen. Deretter kommer nok en passende kraftig snue på grunn av all trekken.
						</p>
						<p>Superamerica kan også leveres med Ferraris GTC-pakke som inkluderer en del racingattributter og keramiske bremseskiver. <a href="Nyheter.php" onclick="open_win3()">Se bilde Ferrari Superamerica...</a>
						</p>
						<p class="off" id="off4b">Superamerica&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>


