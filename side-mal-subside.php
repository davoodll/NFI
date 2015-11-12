<!-- Mal for nyeste-subsider sider -->
<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>**Sett inn sidenavn**</title>
	<meta charset="utf-8" />
	<?php include '../php-include_sub/css-linktags.php';?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
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
				<div id="content">
				</div>
				<footer>
					<?php include "../php-include_sub/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>

