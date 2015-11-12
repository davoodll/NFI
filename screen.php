<?php
$SetTime = 31536000 + time();
setcookie (device, screen, $SetTime);
setcookie (device, screen, $SetTime, '/~s188112/NFI/kontakt/');
setcookie (device, screen, $SetTime, '/~s188112/NFI/biler/');
header ("Location: index.php");
?>
