<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8" />
    <title>Prøvekjøring</title>
	<?php include "../php-include_sub/css-linktags.php";?>
  </head>
    <body>
      <div id="ytterst">
        <div id="inni">
          <div id="provekjoringSkjema">
            <form action="provekjoringTakk.php" method="post">
              <h1>Prøvekjøring</h1>
              Navn <input type="text" name="navn" placeholder="Fornavn, Etternavn"/>
              Adresse <input type="text" class="adresseInput" placeholder="vei/veinummer, postnummer, sted" name="adresse"/><br/>
              Telefon <input type="text" class="telefonInput" placeholder="8 siffer" maxlength="8" name="telefon"/>
              epost <input type="email" class="emailInput" name="epost"/><br/>
              Hvilke biler ønsker du å prøvekjøre?<br/>
              <label for="Ferarri1"><input type="checkbox" id="Ferarri1" name="biler" value="588-Spider"/>588-Spider</label>
              <label for="Ferarri2"><input type="checkbox" id="Ferarri2" name="biler" value="California"/>California</label>
              <label for="Ferarri3"><input type="checkbox" id="Ferarri3" name="biler" value="F12-Berlinetta"/>F12-Berlinetta</label>
              <label for="Ferarri4"><input type="checkbox" id="Ferarri4" name="biler" value="FF"/>FF</label>
              <label for="Ferarri5"><input type="checkbox" id="Ferarri5" name="biler" value="Italia"/>Italia</label>
              <label for="Ferarri6"><input type="checkbox" id="Ferarri6" name="biler" value="612-Scaglietti"/>612-Scaglietti</label>
              <label for="Usikker"><input type="checkbox" id="Usikker" name="biler" value="Usikker"/>Usikker/annen</label><br/>
              Jeg ønsker å bli kontaktet per:
              <label for="kontaktEpost"><input type="checkbox" id="kontaktEpost" name="kontaktform" value="epost">Epost</label>
              <label for="kontaktTelefon"><input type="checkbox" id="kontaktTelefon" name="kontaktform" value="telefon">Telefon</label>
              <label for="kontaktPost"><input type="checkbox" id="kontaktPost" name="kontaktform" value="post">Post</label><br/>
              Har du noen spesielle ønsker eller relevante opplysninger kan du legge til disse her
              <p> <textarea name="question" cols="80" rows="6" placeholder="Legg til kommentar" maxlength="1000"></textarea> </p>
              Vil du motta nyhetsbrev fra oss?
              Ja<input type="radio" name="member" value="true"/>
              Nei<input type="radio" checked="checked" name="member" value="false"/>
              <input type="submit" value="Registrer henvendelse" name="send"/>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>