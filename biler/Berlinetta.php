<?php include "../php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Berlinetta</title>
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
						<p id="on6">Berlinetta&nbsp;&nbsp;&nbsp;"Slides"</p>
						<p id="off6a">Slides&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content6">
					<?php if($print==mobile){include "../php-include_biler/berlinetta-small.php";}
					else{include "../php-include_biler/berlinetta-large.php";}?>
					</div>
					<div class="switch">
						<p id="on1">Berlinetta&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Berlinetta&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h2>Ferrari F12berlinetta 12-cylinder</h2>
						<p>
						F12Berlinetta – italienske navn skjemmer ingen – byr på 12 sylindre, 6,3 liters motor, 740 hk (!) og et dreiemoment på 690 nm.
						I ren motorsykkelstil slår ikke turtallssperra inn før ved 8.700 omdreininger.
						Vi får gåsehud bare ved tanken på hvordan denne italienske hingsten hyler gjennom tunnelene!
						</p>
						<p>
						F12Berlinetta faktisk er den mest miljøvennlige av alle superbilene.
						denne bilen har en vekt på kun 1,5 tonn – en slankekur på over 70 kilo sammenlignet med forrige V12 coupe fra Ferrari.
						Vekten er naturligvis perfekt fordel mellom front og bakende – med 54 prosent av vekten over bakakselen.
						</p>
						<p class="off" id="off1b">Berlinetta&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
