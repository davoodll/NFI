<?php include "php-include/mobile_test.php";?>
<!DOCTYPE html>
<html lang="no">
	<head>
	<title>Kontakt</title>
	<meta charset="utf-8" />
	<?php include "php-include/css-linktags.php";?>
	<?php include_once("php-include/analyticstracking.php") ?>
	<script type="text/javascript" src="js/kontaktskjema.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/content.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	</head>
	<body>
	<div id="everything">
 		<?php include "php-include/header.php";?>
			<div id="wrapper">
				<?php $print = $_COOKIE['device'];
				if($print==mobile){
				include "php-include/menu_mobile.php";}
				elseif($print==screen){
				include "php-include/menu_desktop.php";}
				else{
				include "php-include/menu_mobile.php";
				include "php-include/menu_desktop.php";}
				?>
				<div id="content">
					<div class="switch">
						<p id="on1">Sandvika&nbsp;&nbsp;&nbsp;"Kart"</p>
						<p id="off1a">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content1">
						<h1>Kontakt oss</h1>
						<div class="left">
							<iframe class="kart1" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=sandvika+bil&amp;aq=&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;t=h&amp;ie=UTF8&amp;hq=sandvika+bil&amp;hnear=&amp;ll=59.89525,10.522133&amp;spn=0.00473,0.016512&amp;z=14&amp;iwloc=A&amp;cid=17427815856319873576&amp;output=embed"></iframe>
						</div>
						<p class="off" id="off1b">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on2">Sandvika&nbsp;&nbsp;&nbsp;"Les"</p>
						<p id="off2a">Sandvika&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content2">
						<div class="right">
							<h2>Avdeling Sandvika</h2>
							<h2>Hovedkontor</h2>
							<h3>Åpningstider</h3>
							<p>
									Mandag-Torsdag: 08:00-15:30 </p>
								<p>	Fredag: 09:00-14:00 </p>
								<p>	Lørdag: 10:00-14:00 </p>
								<p>	Søndag: Stengt
							</p>
							<h3>Besøksaddresse</h3>
							<p>
								Gateveien 11, 1111 Sandvika
							</p>
							<h3>Kontaktinformasjon</h3>
							<p>
									Tlf: 21 20 50 60 </p>
								<p>	Fax: 21 20 50 68 </p>
								<p>	epost: Post@<br/>norskferrariimport.no
							</p>
						</div>
						<p class="off" id="off2b">Sandvika&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on3">Fornebu&nbsp;&nbsp;"Kart"</p>
						<p id="off3a">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content3">
						<div class="left">
							<iframe class="kart1" src="http://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=fornebu&amp;aq=&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Fornebu,+Akershus,+Norway&amp;z=14&amp;iwloc=A&amp;ll=59.899519,10.6287&amp;output=embed"></iframe>
						</div>
						<p class="off" id="off3b">Kart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div class="switch">
						<p id="on4">Fornebu&nbsp;&nbsp;"Les"</p>
						<p id="off4a">Fornebu&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="content4">
						<div class="right">
							<h2>Avdeling Fornebu</h2>
							<h2>Showroom</h2>
							<h3>Åpningstider</h3>
							<p>
									Mandag-Torsdag: 10:00-15:00 </p>
								<p>	Fredag: 12:00-14:00 </p>
								<p>	Lørdag: 12:00-14:00 </p>
								<p>	Søndag: Stengt
							</p>
							<h3>Besøksaddresse</h3>
							<p>
								Gateveien 11, 1111 Fornebu
							</p>
							<h3>Kontaktinformasjon</h3>
							<p>
									Tlf: 21 40 50 60 </p>
								<p>	Fax: 21 40 50 68 </p>
								<p>	epost: Showroom@<br/>norskferrariimport.no
							</p>
						</div>
						<p class="off" id="off4b">Fornebu&nbsp;&nbsp;"Skjul"</p>
					</div>
					<div id="button">
						<p id="kontaktOss">For å raskt og enkelt å kontakte oss, anbefaler vi bruk av <a onclick="open_kontaktskjema()">Kontaktskjema</a></p>
						<input type="button" value="Kontaktskjema" id="kontaktskjemaKnapp" onclick="open_kontaktskjema()"/>
					</div>
				</div>
				<footer>
				<?php include "php-include/footer.php";?>
				</footer>
			</div>
		</div>
	</body>
</html>
