<?php
$SetTime = 31536000 + time();
setcookie (device, mobile, $SetTime);
setcookie (device, mobile, $SetTime, '/~s188112/NFI/kontakt/');
setcookie (device, mobile, $SetTime, '/~s188112/NFI/biler/');
header ("Location: index.php");
?>
