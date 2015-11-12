<!DOCTYPE html>
<html lang="no">
  <head>
    <script type="text/javascript">
      setTimeout("self.close();",20000)//Her vil vinduet automatisk lukke seg etter 20 sekunder
    </script>
    <meta charset="utf-8" />
    <title>Takk for din henvendelse</title>
	<?php include "../php-include_sub/css-linktags.php";?>
  </head>
    <body>
      <div id="ytterst">
        <div id="inni">
      	 <?php
      	   if(isset($_REQUEST["send"]))
      	   {
      	 	   $navn=$_REQUEST["navn"];
      	 	   $addresse=$_REQUEST["adresse"];
      	 	   echo "<h1>Takk for din henvendelse, $navn!</h1>\r\n <h3>En av våre ansatte vil nå
      	 	   ta kontakt med deg for å sette opp en plan med dato og tid for prøvekjøringen.\r\n
      	 	   Vi garanterer deg en fantastisk opplevelse, og ser frem til en hyggelig bilprat</h3>";
      	   }
          ?>
        <?php
          $con = mysql_connect("cube.iu.hio.no:3306","s189104","");
          if (!$con)
            {
              die('Could not connect: ' . mysql_error());
            }
          mysql_select_db("s189104", $con);
          $sql="INSERT INTO provekjoringtest1 (navn, adresse, telefon, epost, bilOnsket, kontaktOnsket, ekstraOpplysninger, nyhetsbrev)
          VALUES
          ('$_REQUEST[navn]','$_REQUEST[adresse]','$_REQUEST[telefon]','$_REQUEST[epost]','$_REQUEST[biler]','$_REQUEST[kontaktform]','$_REQUEST[question]','$_REQUEST[member]')";

          if (!mysql_query($sql,$con))
            {
              die('Error: ' . mysql_error());
            }
          mysql_close($con);
          ?>
        </div>
      </div>
    <input type="submit" id="lukkKnapp" name="lukkVindu" value="Lukk vindu" onClick="window.close()">
      <p id="automatiskLukk">(Dette vinduet vil lukke seg automatisk etter 20 sekunder. Klikk på "lukk" for å lukke manuelt)</p>
	 </body>
</html>