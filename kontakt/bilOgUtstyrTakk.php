<!DOCTYPE html>
<html lang="no">
  <head>
    <script type="text/javascript">
      setTimeout("self.close();",20000)//Her vil vinduet automatisk lukke seg etter 20 sekunder
    </script>
    <meta charset="utf-8" />
    <title>Takk for henvendelse</title>
	<?php include "../php-include_sub/css-linktags.php";?>
  </head>
    <body>
      <div id="ytterst">
        <div id="inni">
      	 <?php
      	   if(isset($_POST["send"]))
      	   {
      	 	   $navn=$_POST["navn"];
      	 	   $addresse=$_POST["adresse"];
      	 	   echo "<h1>Takk for din henvendelse, $navn!</h1>\r\n <h3>Du vil raskt motta informasjon om valgte biler.</h3>";
      	   }
           if(!empty($_POST['biler'])) {
            $informasjonOmBil = implode(",", $_POST['biler']);
           }
           if(!empty($_POST['kontaktform'])) {
            $kontaktform = implode(",", $_POST['kontaktform']);
           }
          ?>
        <?php
          $con = mysql_connect("cube.iu.hio.no:3306","s189104","");
          if (!$con)
            {
              die('Could not connect: ' . mysql_error());
            }
          mysql_select_db("s189104", $con);
          $sql="INSERT INTO bilOgUtstyr (navn, adresse, telefon, epost, biler, kontaktform, ekstraOpplysninger, nyhetsbrev)
          VALUES
          ('$_POST[navn]','$_POST[adresse]','$_POST[telefon]','$_POST[epost]','$informasjonOmBil','$kontaktform','$_POST[question]','$_POST[member]')";

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