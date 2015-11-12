<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Bil-bedrift</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/kontaktskjema.js"></script>
	<script type="text/javascript" src="js/provekjoring.js"></script>
	<?php $print = $_COOKIE['device'];
	if($print==mobile){echo'
	<script type="text/javascript" src="js/img_small.js"></script>';}
	else{echo'
	<script type="text/javascript" src="js/img.js"></script>';}?>
	</head>
	<body>
	<div id="everything">
 		<?php include "php-include/header.php";?>
			<div id="wrapper">
				<?php
				if($print==mobile){
				include "php-include/menu_mobile.php";}
				elseif($print==screen){
				include "php-include/menu_desktop.php";}
				else{
				include "php-include/menu_mobile.php";
				include "php-include/menu_desktop.php";}
				?>
				<div id="content">
					<a href="Modeller.php"><img src="img/FerrariCalifornia2.jpg" id="Bilder" alt="Ferrarri-slides"></a>
					<span id="royalCaptionItem" data-show-effect="fade movetop" data-move-offset="15">
						<span id="captionCar">
							<a id="index-link" href="Modeller.php">Trykk for å se våre biler</a>
						</span>
					</span>
					<script type="text/javascript" src="js/slideit.js"></script>
				</div>
				<?php if($print!=mobile){echo'
				<div id="content_3">
			         <ul>
			            <li><a href="Nyheter.php">
			            <div class="title2">3 splitter nye modeller på vei inn!</div>
			            <img src="img/3nye.png" class="reklame" alt="3 splitter nye modeller på vei inn">

			            </a></li>
			            <li><a href="javascript:open_provekjoring();">
			            <div class="title2">Prøvekjør din favorittbil i dag!</div>
			            <img src="img/FerrariItaliaInne.jpg" class="reklame" alt="Ferrari">

			            </a></li>
			            <li><a href="Kampanje.php">
			            <div class="title2">Sponset tur til Italia!</div>
			            <img src="img/turTilItalia.png" class="reklame" alt="Kampanje: sponset tur til Italia med banekjøring">

			            </a></li>
			    	</ul>
			    </div>';}?>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>

