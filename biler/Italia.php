<?php include "../php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Italia</title>
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
						<p id="on6">Italia&nbsp;&nbsp;&nbsp;&nbsp;"Slides"</p>
						<p id="off6a">Slides&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content6">
					<?php if($print==mobile){include "../php-include_biler/italia-small.php";}
					else{include "../php-include_biler/italia-large.php";}?>
					</div>
					<div class="switch">
						<p id="on1">Italia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">Italia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h2>Ferrari 458 italia</h2>
						<p>
						Ferrari 458 Italia er ikke bare en bil som er en ekstraordinær opplevelse å kjøre, den gjør også noe med omgivelsene. Samtidig er det en bil som gjør mye ut av seg.
						Utseende er en sak, men lyden den gir fra seg er massiv, brutal og i mine ører helt riktig. Kanskje ikke så rart når man snakker om en V8 motor som har 570 hestekrefter.
						Den har ikke den tradisjonelle V8-brumlingen, her snakker vi mer om et skarpt snerr, i retning formel 1.
						</p>
						<p>
						Det som er nytt med 458 Italia er at de har samlet en rekke andre funksjoner på rattet. Der er blinklys, vindusviskere og annet man normalt finner på spaker bak rattet.
						Dette er gjort for at føreren skal slippe å ta hendene bort fra styringen, men det er ikke til å komme i fra at det er litt upraktisk med blinkerne plassert på noe som beveger seg.
						På den positive siden, det er det eneste negative jeg kan komme på om bilen.
						</p>
						<p class="off" id="off1b">Italia&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
