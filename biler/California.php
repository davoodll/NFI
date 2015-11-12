<?php include "../php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>California</title>
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
						<p id="on6">California&nbsp;&nbsp;&nbsp;"Slides"</p>
						<p id="off6a">Slides&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content6">
					<?php if($print==mobile){include "../php-include_biler/california-small.php";}
					else{include "../php-include_biler/california-large.php";}?>
					</div>
					<div class="switch">
						<p id="on1">California&nbsp;&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off1a">California&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h2>Ferrari California</h2>
						<p>
						Ferrari California gjorde sin debut i 2008 og er selskapets 2+2 hardtop cabriolet. Det er en front-motor, bakhjulsdrift grand touring sportsbil og er den første bilen på fire tiår som ikke bærer et alfanumerisk vedheng.
						</p>
						<p>
						The California er drevet av en 4.3L V8 motor, 454 hestekrefter.  Denne motoren kan kombineres med enten en seks-trinns manuell girkasse eller selskapets første syv-trinns dobbel clutch automatgirkasse.
						Noe som er ekstremt morsomt med bilen er å ligge i bra marsjhastighet på motorvei, for så å trykke til gasspedalen, da kommer det en helt hårreisende tøff lyd når eksosen åpner seg opp.
						</p>
						<p>
						Til tross for at bilen er spekket med teknologi, har den en mekanisk kjørefølelse, styringen er ekstremt presis, samtidig som den er komfortabel. Girkassen med dobbeltkløtsj er og et kapittel for seg,
						den er syvtrinns - også det for første gang i en Ferrari, noe som har både med komfort og drivstofforbruk å gjøre – som kan være rimelig sømløs, eller herlig mekanisk om man overstyrer den.
						</p>
						<p class="off" id="off1b">California&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
