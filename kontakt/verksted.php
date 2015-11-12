<!DOCTYPE html>
<html lang="no">
    <head>
      <meta charset="utf-8" />
      <title>Verksted</title>
	<?php include "../php-include_sub/css-linktags.php";?>
    </head>
      <body>
        <div id="ytterst">
          <div id="inni">
            <div id="provekjoringSkjema">
               <form action="verkstedTakk.php" method="post">
                  <h1>Kontakt serviceavdelingen</h1>
                  Navn <input type="text" name="navn" placeholder="Fornavn, Etternavn"/>
                  Adresse <input type="text" class="adresseInput" placeholder="vei/veinummer, postnummer, sted" name="adresse"/><br/>
                  Telefon <input type="text" class="telefonInput" placeholder="8 siffer" maxlength="8" name="telefon"/>
                  epost <input type="email" class="emailInput" name="epost"/><br/>
                  Har du kjøpt bil gjennom oss?
                  <label for="kjoptJa"><input type="radio" checked name="bilKjoptHosOss" id="kjoptJa" value="Ja"/>Ja</label>
                  <label for="kjoptNei"><input type="radio" name="bilKjoptHosOss" id="kjoptNei" value="Nei"/>Nei</label><br/>
                  Her kan du skrive inn din henvendelse til serviceavdelingen
                  <p> <textarea name="question" cols="80" rows="9" placeholder="Din henvendelse" maxlength="1000"></textarea> </p>
                  Jeg ønsker å bli kontaktet per:
                  <label for="kontaktEpost"><input type="checkbox" id="kontaktEpost" name="kontaktform[]" value="epost">Epost</label>
                  <label for="kontaktTelefon"><input type="checkbox" id="kontaktTelefon" name="kontaktform[]" value="telefon">Telefon</label>
                  <label for="kontaktPost"><input type="checkbox" id="kontaktPost" name="kontaktform[]" value="post">Post</label><br/>
                  Vil du motta nyhetsbrev fra oss?
                  Ja<input type="radio" name="member" value="true"/>
                  Nei<input type="radio" name="member" checked="checked" id="member" value="false"/>
                  <input type="submit" value="Registrer henvendelse" name="send"/>
              </form>
            </div>
          </div>
        </div>
      </body>
</html>