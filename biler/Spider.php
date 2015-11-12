<?php include "../php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Spider</title>
	<meta charset="utf-8" />
	<?php include "../php-include_sub/css-linktags.php";?>
	<?php include_once("../php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="../js/jquery.js"></script>
  	<script type="text/javascript" src="../js/content.js"></script>
  	<script type="text/javascript" src="../js/content6.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
	<script type="text/javascript" src="../js/html5gallery.js"></script>

	</head>
	<body>
	<div id="everything">
 		<?php include "../php-include_sub/header.php";?>
			<div id="wrapper">
				<?php $print = $_COOKIE['device'];
				if($print==mobile){
				include "../php-include_sub/menu_mobile.php";}
				elseif($print==screen){
				include "../php-include_sub/menu_desktop.php";}
				else{
				include "../php-include_sub/menu_mobile.php";
				include "../php-include_sub/menu_desktop.php";}
				?>
				<div id="content_2">
					<div class="switch">
						<p id="on6">Spider&nbsp;&nbsp;&nbsp;&nbsp;"Slides"</p>
						<p id="off6a">Slides&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content6">
					<?php if($print==mobile){include "../php-include_biler/spider-small.php";}
					else{include "../php-include_biler/spider-large.php";}?>
					</div>
					<div class="switch">
						<p id="on1">Spider&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Spider&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h2>Ferrari 458 Spider  8-cylinder</h2>
						<p>
						Nye Ferrari 458 Spider med 458 Italia utvider rekkevidden av Ferrari-modeller med midtmontert V8-motor.
						Utstyrt med den samme kompromissløse teknologi, kjøreegenskaper og ytelser i en elegant Cabriolet-konfigurasjon,
						Ferrari 458 Spider med Patentert hard topp er en verdensnyhet.
						</p>
						<p>
						458 Spider er drevet av en 4,5 liters direkteinnsprøytet V8-motor som for sin innovasjon når det gjelder brukervennlighet,
						ytelse, økonomi og raffinement er nominert for “The International Engine of the Year”. Kraften leveres til hjulene via Ferraris klasseledende dobbel-clutch-girkasse F1 og videreutviklet E-diff og “F1-Trac” traction-kontroll.
						</p>
						<p class="off" id="off1b">Spider&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
