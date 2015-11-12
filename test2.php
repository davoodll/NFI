<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>**COOKIE TEST**</title>
	<meta charset="utf-8" />
	<?php include 'php-include/css-linktags.php';?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
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
					<div id="content1">
						<?php
						$print = $_COOKIE['device'];
						if($print==screen){
						echo '<p>SCREEN</p>';
						}
						elseif($print==mobile){
						echo '<p>MOBILE</p>';
						}
						else{
						echo '<p>DEFAULT</p>';
						}
						?>
					</div>
				</div>
				<footer>
					<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>

