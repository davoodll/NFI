<?php include "../php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>FF</title>
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
						<p id="on6">FF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Slides"</p>
						<p id="off6a">Slides&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content6">
					<?php if($print==mobile){include "../php-include_biler/ff-small.php";}
					else{include "../php-include_biler/ff-large.php";}?>
					</div>
					<div class="switch">
						<p id="on1">FF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">FF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h2>Ferrari FF</h2>
						<p>
						Ferrari FF er noe virkelig nytt fra denne fabrikken. I alle år har de laget biler med bakhjulstrekk, mens FF har som første Ferrari firehjulstrekk.
						Dette kombinert med bakseter og et relativt romslig bagasjerom på 450 liter, gir bilen muligheten til å kalle seg verdens raskeste familiebil.
						Under panseret finner man en 6.262 kubikkcentimeters V12 motor på intet mindre enn 660 hestekrefter.
						FF-en er 490 centimeter lang og veier 1.880 kilo. Toppfarten er på 335 kilometer i timen, noe ingen andre firesetere på markedet i dag er i stand til. Null til hundre tar 3,7 sekunder.
						</p>
						<p class="off" id="off1b">FF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
