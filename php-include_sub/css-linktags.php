
	<!-- CSS link cookie test. ***START***	-->

	<?php
	$print = $_COOKIE['device'];
	if($print==screen){
	echo '<link href="../css/screen.css" rel="stylesheet" type="text/css" />';
	}
	elseif($print==mobile){
	echo '<link href="../css/mobile.css" rel="stylesheet" type="text/css" />';
	}
	else{
	include '../php-include_sub/css-linktags-html.php';
	}
	?>

	<!-- CSS link cookie test. ***SLUTT***	-->

