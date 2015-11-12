<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8" />
    <title>Velg henvendelse</title>
	<?php include "../php-include_sub/css-linktags.php";?>
	</head>
    <body>
      <div id="ytterst">
        <div id="inni">
          <h1 id="overskriftHenvendelse">Hva kan vi hjelpe deg med?</h1>
           <form action="sendTilSide.php" method="post">
            <label for="provekjoring.php"><input type="radio" checked name="henvendelse" id="provekjoring.php" value="provekjoring"/>Prøvekjøring</label><br/>
            <label for="bilOgUtstyr.php"><input type="radio" name="henvendelse" id="bilOgUtstyr.php" value="bilOgUtstyr"/>Informasjon eller spørsmål om biler og utstyr</label><br/>
             <!--Velger å ha "checked" på en av radioknappene slik at ingen kan trykke seg videre uten at en boks er krysset av!-->
            <label for="verksted.php"><input type="radio" name="henvendelse" id="verksted.php" value="verksted"/>Spørsmål til verksted og serviceavdelingen</label><br/>
            <label for="andreHenvendelser.php"><input type="radio" name="henvendelse" id="andreHenvendelser.php" value="annet"/>Andre henvendelser</label><br/>
            <input type="submit" id="sendKnapp" value="Videre" name="send"/>
          </form>
        </div>
      </div>
    </body>
</html>