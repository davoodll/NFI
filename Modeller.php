<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
<head>
	<title>Modeller</title>
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
						<p id="on1">Modeller&nbsp;&nbsp;&nbsp;&nbsp;"Vis"</p>
						<p id="off1a">Modeller&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h1 id="mod">Modeller på lager</h1>
						<ul>
							<li><a href="biler/Spider.php">
								<img src="img/Ferrari458Spider.jpg" alt="Ferrari 458-Spider">
									<div class="title">Ferrari 458-Spider</div>
								</a>
							</li>
							<li><a href="biler/California.php">
								<img src="img/FerrariCalifornia.jpg" alt="Ferrari-California">
									<div class="title">Ferrari-California</div>
								</a>
							</li>
							<li><a href="biler/Berlinetta.php">
								<img src="img/FerrariF12berlinetta2.jpg" alt="Ferrari F12-Berlinetta">
									<div class="title">Ferrari F12-Berlinetta</div>
								</a>
							</li>
							<li><a href="biler/FF.php">
								<img src="img/FerrariFF2.jpg" alt="Ferrari FF">
									<div class="title">Ferrari FF</div>
								</a>
							</li>
							<li><a href="biler/Italia.php">
								<img src="img/FerrariItalia2.jpg" alt="Ferrari-Italia">
									<div class="title">Ferrari-Italia</div>
								</a>
							</li>
							<li><a href="biler/Scaglietti.php">
								<img src="img/612-scaglietti.jpg" alt="Ferrari 612-scaglietti">
									<div class="title">Ferrari 612-scaglietti</div>
								</a>
							</li>
						</ul>
						<p class="off" id="off1b">Modeller&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
