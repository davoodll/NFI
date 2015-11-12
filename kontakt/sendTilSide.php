<?php
ob_start();
ob_end_clean();

if($_POST['henvendelse'] == 'provekjoring') {
header("Location: provekjoring.php");
} else if ($_POST['henvendelse'] == 'verksted') {
header("Location: verksted.php");
} else if ($_POST['henvendelse'] == 'annet') {
header("Location: andreHenvendelser.php");
} else if ($_POST['henvendelse'] == 'bilOgUtstyr') {
header("Location: bilOgUtstyr.php");
}

?>