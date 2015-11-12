<!DOCTYPE html>
<html lang="no">
	<head>
	<title>**NO COOKIE TEST**</title>
	<meta charset="utf-8" />
	<?php include 'php-include/css-linktags-html.php';?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	</head>
	<body>
	<div id="everything">
 		<?php include "php-include/header.php";?>
			<div id="wrapper">
				<?php
				include "php-include/menu_mobile.php";
				include "php-include/menu_desktop.php";
				?>
				<div id="content">
				</div>
				<footer>
					<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>

