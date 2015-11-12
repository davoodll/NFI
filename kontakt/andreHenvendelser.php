<!DOCTYPE html>
<html lang="no">
    <head>
      <meta charset="utf-8" />
      <title>BilOgUtstyr</title>
	<?php include "../php-include_sub/css-linktags.php";?>
    </head>
      <body>
        <div id="ytterst">
          <div id="inni">
            <div id="provekjoringSkjema">
              <form action="andreHenvendelserTakk.php" method="post">
                <h1>Andre henvendelser</h1>
                Navn <input type="text" name="navn" placeholder="Fornavn, Etternavn"/>
                Adresse <input type="text" class="adresseInput" placeholder="vei/veinummer, postnummer, sted" name="adresse"/><br/>
                Telefon <input type="text" class="telefonInput" placeholder="8 siffer" maxlength="8" name="telefon"/>
                epost <input type="email" class="emailInput" name="epost"/><br/>
                Jeg ønsker å bli kontaktet per:
                <label for="kontaktEpost"><input type="checkbox" id="kontaktEpost" name="kontaktform[]" value="epost">Epost</label>
                <label for="kontaktTelefon"><input type="checkbox" id="kontaktTelefon" name="kontaktform[]" value="telefon">Telefon</label>
                <label for="kontaktPost"><input type="checkbox" id="kontaktPost" name="kontaktform[]" value="post">Post</label><br/>
                Skriv inn din henvendelse her:
                <p> <textarea name="question" cols="80" rows="13" placeholder="Legg til kommentar" maxlength="1000"></textarea> </p>

                Vil du motta nyhetsbrev fra oss?
                Ja<input type="radio" name="member" value="Ja"/>
                Nei<input type="radio" checked="checked" name="member" value="Nei"/>
                <input type="submit" value="Registrer henvendelse" name="send"/>
              </form>
            </div>
          </div>
        </div>
      </body>
</html>