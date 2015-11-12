
					<!--	Footer	***START***	-->
					<div id="folgOss">
						<p>Følg oss gjerne på Twitter og Facebook:
						<a href="http://www.facebook.com/NorskFerrariImport"><img src="img/facebook.png" alt="facebook"></a>
						<a href="https://twitter.com/MarkedsAvdeling"><img src="img/twitter_32.png" alt="twitter"></a></p>
					</div>
					<?php $print = $_COOKIE['device'];
					if($print==mobile){include "php-include/set_desktop.php";}
					elseif($print==screen){include "php-include/set_mobile.php";}
					else{include "php-include/set_mobile.php";
					include "php-include/set_desktop.php";}?>
					<!--	Footer	***SLUTT***	-->

