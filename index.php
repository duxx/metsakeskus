<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metsäkeskus AR</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
		// AIzaSyA037bn7HfhwjHg8oXbIen9tXPWRdZ-BFY
		var map, marker;
		var rastikoordinaatit = new Array();
		for (var x = 0; x < 13; x++)
			rastikoordinaatit[x] = new Object();
		rastikoordinaatit[0].Lat = 0;
		rastikoordinaatit[0].Lon = 0;
		rastikoordinaatit[1].Lat = 61.49194505;
		rastikoordinaatit[1].Lon = 23.74579807;
		rastikoordinaatit[2].Lat = 0;
		rastikoordinaatit[2].Lon = 0;
		rastikoordinaatit[3].Lat = 0;
		rastikoordinaatit[3].Lon = 0;
		rastikoordinaatit[4].Lat = 61.4921019;
		rastikoordinaatit[4].Lon = 23.74559371;
		rastikoordinaatit[5].Lat = 61.49183348;
		rastikoordinaatit[5].Lon = 23.74188122;
		rastikoordinaatit[6].Lat = 61.49208531;
		rastikoordinaatit[6].Lon = 23.74038871;
		rastikoordinaatit[7].Lat = 61.49228699;
		rastikoordinaatit[7].Lon = 23.74205932;
		rastikoordinaatit[8].Lat = 61.49244159;
		rastikoordinaatit[8].Lon = 23.7410093;
		rastikoordinaatit[9].Lat = 61.4920544;
		rastikoordinaatit[9].Lon = 23.74586183;
		rastikoordinaatit[10].Lat = 61.49279646;
		rastikoordinaatit[10].Lon = 23.73894204;
		rastikoordinaatit[11].Lat = 61.49307921;
		rastikoordinaatit[11].Lon = 23.73836729;
		rastikoordinaatit[12].Lat = 61.49253209;
		rastikoordinaatit[12].Lon = 23.73990959;

		function initialize() {
			var mapOptions = {
				zoom: 15,
				center: new google.maps.LatLng(61.496257,23.732195),
				disableDefaultUI: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById('map'), mapOptions);
			var auto = new google.maps.LatLng(61.492435, 23.781143);
			var marker2 = new google.maps.Marker({
				position: auto,
				map: map,
				title: 'Seuraava rasti'
			});
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(61.496257,23.732195),
				map: map,
				title: 'Oma sijainti'
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>	
	<div id="map" style="width: 960px; height: 450px;">
		KARTTA
	</div>
	
	<div id="positionDiv" class="alert alert-info">No position, yet!</div>
	
	<div class="wrapper">
		<div id="results">
			<span id="lattitude"></span><br>
			<span id="longitude"></span><br>
			<span id="time"></span><br>
			
			<span id="rasti"></span>
		</div>
	</div>
	
	
	<!-- ALOITUSRUUTU: -->
	<div id="rasti0" class="rasti modal">
		<div class="modal-header">
			<h2>Metsäpolku</h2>
		</div>
		<div class="modal-body">
			<p>Perit 10 ha metsää Pohjanmaan Kerttulan kylältä läheltä Kauhavaa. Sinulla ei ole ollut aiemmin metsää. Metsän kestävä ja sinun tavoitteiden mukainen käyttö on sinulle uusi asia. Lähdet tutustumaan metsänkäytön perusasioihin.</p>
			<img src="img/alku.jpg" alt="Kuva metsätilasta">
		</div>
		<div class="modal-footer">
			<button id="rasti0_btn" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- /ALOITUSRUUTU -->
	
	<!-- RASTI 1: -->
	<div id="rasti1_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Perustietoa suomalaisista metsistä</h2>
		</div>
		<div class="modal-body">
			<img src="img/ala.jpg" alt="Metsät Suomessa" style="float: right;">
			<ul>
				<li>metsien pinta-ala 23 milj. ha, 76% koko maan pinta-alasta</li>
				<li>yksityiset henkilöt omistavat 60% Suomen metsistä</li>
				<li>yksityisiä metsänomistajia 737 000. Joka 7. suomalainen omistaa metsää</li>
				<li>loput metsät kuuluvat valtiolle (26%), yhtiöille (9%) ja muille tahoille (5%)</li>
			</ul>
			<button id="rasti1_1btn2" class="btn">Metsäalan toimijoita</button>
		</div>
		<div class="modal-footer">
			<button id="rasti1_1btn" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 1, OSA 2 -->
	<div id="rasti1_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tietoa ja neuvoja metsänkäyttöön tarjoaa</h2>
		</div>
		<div class="modal-body">
			<p>Logot, joista aukeaa lyhyt kuvausteksti</p>
		</div>
		<div class="modal-footer">
			<button id="rasti1_2btn" class="btn btn-primary">Palaa takaisin</button>
		</div>
	</div>
	
	<!-- RASTI 1, OSA 3 -->
	<div id="rasti1_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Mikä sinulle on metsässä tärkeää?</h2>
		</div>
		<div class="modal-body">
			<p>Valitse sinulle tärkein asia</p>
			<ul class="unstyled">
				<li><button id="rasti1_3btn0" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Pääsen metsään virkistymään</li>
				<li><button id="rasti1_3btn1" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Saan metsästä tuloja</li>
				<li><button id="rasti1_3btn2" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Voin käyttää metsää haluamallani tavalla</li>
				<li><button id="rasti1_3btn3" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Metsään liittyvät hyvät muistot</li>
				<li><button id="rasti1_3btn4" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Haluan turvata metsän monipuolisen lajiston säilymisen</li>
			</ul>
		</div>
		<div class="modal-footer">
			<p>Valitse haluamasti vaihtoehto</p>
		</div>
	</div>
	<!-- RASTI 1, OSA 4 -->
	<div id="rasti1_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Lähdet tutustumaan miten Kerttulan metsätilaa voisi hyödyntää luonnon, talouden ja virkistyksen näkökulmista.</h2>
		</div>
		<div class="modal-body">
			<p>Ensin pääset tutustumaan metsän <span id="r1tarkeaa"></span>.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti1_4btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI: 1 -->
	
	<!-- RASTI 2 -->
	<div id="rasti2_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Myyt metsästäsi puuta ja tutustut metsän taloudelliseen tuottoon</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Mikä on yhden puun arvo?</li>
				<ul>
					<li>Metsikön arvoon vaikuttavat mm. puulaji, puun koko, maasto sekä puumarkkinat</li>
					<li>Esimerkiksi mänty, jonka läpimitta eli paksuus on 35 cm ja pituus 23 metriä</li>
					<ul>
						<li>Tilavuus noin 1000 litraa, eli 1m<sup>3</sup></li>
						<li>Arvo noin 50 euroa</li>
					</ul>
				</ul>
			</ul>
			<button id="rasti2_1btn" class="btn">Mikä on sinun metsätilasi arvo?</button>
		</div>
		<div class="modal-footer">
			<button id="rasti2_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 2, OSA 2 -->
	<div id="rasti2_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Mikä on kokonaisen metsätilan arvo?</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Paljonko metsänomistajalla on keskimäärin metsää?</li>
				<ul>
					<li>Suomalainen metsänomistaja omistaa keskimäärin 35 hehtaaria metsää</li>
					<li>Sinun metsätilallasi on 3 ha taimikkoa, 4 ha nuorta kasvatusmetsää ja 3 ha varttunutta kasvatusmetsää</li>
					<ul>
						<li>7 000 e X 10 ha = 70 000 e</li>
					</ul>
				</ul>
			</ul>
			<button id="rasti2_2btn" class="btn">Miten mittaan puun tilavuuden?</button>
		</div>
		<div class="modal-footer">
			<button id="rasti2_2btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 2, OSA 3 -->
	<div id="rasti2_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Näin mittaat puun tilavuuden</h2>
		</div>
		<div class="modal-body">
			<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/o5J91ojkJZs?version=3&amp;hl=en_GB&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/o5J91ojkJZs?version=3&amp;hl=en_GB&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
			<button id="rasti2_3btn" class="btn">Laske puun arvo</button>
		</div>
		<div class="modal-footer">
			<button id="rasti2_3btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 2, OSA 4 -->
	<div id="rasti2_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Metsästä saatava puunmyyntitulo</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Mikä on kyseisen männyn tilavuus ja arvo?</li>
				<li>Sinun tulee mitata tai arvioida puun pituus sekä läpimitta</li>
				<li>Merkitse arvot niille varattuihin kohtiin</li>
				<li>Sovellus antaa sinulle yksittäisen puun tilavuuden ja painon</li>
			</ul>
			<table>
				<tr><td>pituus</td><td><input id="rasti2_4input1" type="text" value="0" /> metriä (erottimena piste)</td></tr>
				<tr><td>läpimitta</td><td><input id="rasti2_4input2" type="text" value="0" /> metriä (erottimena piste)</td></tr>
				<tr><td><b>tilavuus</b></td><td><input id="rasti2_4input3" type="text" value="0" disabled /> kuutiota</td></tr>
				<tr><td><b>arvo</b></td><td><input id="rasti2_4input4" type="text" value="0" disabled /> euroa</td></tr>
				<tr><td></td><td><button id="rasti2_4btn2" class="btn btn-primary">Laske</button></td></tr>
			</table>
		</div>
		<div class="modal-footer">
			<button id="rasti2_4btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 2, POISTUMISRUUTU -->
	<div id="rasti2_5" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Metsän taloudellisen hyödyntämisen ohella on tärkeää huomioida maastosta löytyvät tärkeä elinympäristöt. Omastakin metsästäsi taitaa jokin tärkeä luontokohde löytyä. Tutustu luonnon suojeluun ja tärkeisiin luontotyyppeihin.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti2_5btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 2 -->
	
	<!-- RASTI 3 -->
	<div id="rasti3_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Metsässäsi on karu kallionpäällys männikkö, pohdit voisiko sen suojella</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Eritavoin suojeltuja metsiä on Etelä-Suomessa yhteensä xx% metsäalasta</li>
				<li>Suojelun tavoitteet</li>
				<ul>
					<li>luontoarvoiltaan merkittäviä kohteita hyvin vähän</li>
					<li>elinympäristöjen esiintyminen turvattava</li>
					<li>harvinainen, uhanalainen lajisto</li>
				</ul>
			</ul>
			<button id="rasti3_1btn" class="btn">Mikä on METSO?</button>
		</div>
		<div class="modal-footer">
			<button id="rasti3_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 3, OSA 2 -->
	<div id="rasti3_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Näitä luontotyyppejä on tärkeä suojella</h2>
		</div>
		<div class="modal-body">
			<p>Mitä kohteita tulee suojella? Klikkaa suojeltavien kohteiden kuvia.</p>
			<table>
				<tr>
					<td><img src="img/s_jyrkanne.jpg" alt="Jyrkänne" class="ei-valittu oikein suojelu"><br />Jyrkänne</td>
					<td><img src="img/s_karukko.jpg" alt="Karukko" class="ei-valittu oikein suojelu"><br />Karukko</td>
					<td><img src="img/s_lahde.jpg" alt="Lähde" class="ei-valittu oikein suojelu"><br />Lähde</td>
					<td><img src="img/s_lehto.jpg" alt="Lehto" class="ei-valittu oikein suojelu"><br />Lehto</td>
					<td><img src="img/s_puro.jpg" alt="Puro" class="ei-valittu oikein suojelu"><br />Puro</td>
				</tr>
			</table>
			<p>
				<div id="r32pisteet">&nbsp;</div>
				<button id="rasti3_2btn3" class="btn">Tarkista pisteet</button>
				<button id="rasti3_2btn" class="btn">Mitä kasveja ympäristäsi löydät</button>
			</p>
		</div>
		<div class="modal-footer">
			<button id="rasti3_2btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 3, OSA 3 -->
	<div id="rasti3_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>METSO</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Suojelemalla metsiään voi saada myös taloudellista tuottoa. Jos metsänomistaja ilmoittaa metsäalueensa johonkin suojeluohjelmaan hänelle korvataan hänen menettämänsä puunmyyntitulot. Korvaus arvioidaan aina tapauskohtaisesti mm. kohteen puulajin ja sen laadun sekä ajankohtaisen puun markkinahinnan mukaan.</li>
				<li>Eteläisessä Suomessa yksi tunnetuimmista ja suosituimmista metsien suojeluohjelmista on METSO-ohjelma eli Etelä-Suomen metsien monimuotoisuuden toimintaohjelma. Kun metsänomistaja tarjoaa metsäänsä METSO-ohjelmaan, asiantuntija käy paikan päällä metsässä katsomassa sopiiko kohde ohjelmaan. Kohteella arvioidaan, millaista puustoista elinympäristöä se edustaa ja millaisia monimuotoisuudelle tärkeitä piirteitä siinä on. Lisäksi tarkastelussa voidaan ottaa huomioon myös kohteen sosiaaliset merkitykset sekä maisema- ja kulttuuriarvot. Valintaan vaikuttaa myös se, millainen suojelutarve kohteella on ja kuinka lähellä se sijaitsee jo olemassa olevia suojelualueita.</li>
				<li>METSO-ohjelman päätarkoituksena on suojella metsiä, jotka ovat luonnonarvoiltaan monipuolisia ja elinympäristöinä arvokkaita. Lisäksi ohjelmalla pyritään laajentamaan yhtenäisten suojelualueverkostojen pinta-alaa.</li>
			</ul>
			<button id="rasti3_3btn" class="btn">Näitä luontotyyppejä on tärkeä suojella</button>
		</div>
		<div class="modal-footer">
			<button id="rasti3_3btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 3, OSA 4 -->
	<div id="rasti3_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Näitä luontotyyppejä on tärkeä suojella</h2>
		</div>
		<div class="modal-body">
			<p>Mitä kasveja löydät ympäriltäsi? Klikkaa löytämiesi kasvien kuvia.</p>
			<table>
				<tr>
					<td><img src="img/k_puolukka.jpg" alt="Puolukka" class="ei-valittu oikein kasvi"><br />Puolukka</td>
					<td><img src="img/k_juolukka.jpg" alt="Juolukka" class="ei-valittu vaarin kasvi"><br />Juolukka</td>
					<td><img src="img/k_nokkonen.jpg" alt="Nokkonen" class="ei-valittu oikein kasvi"><br />Nokkonen</td>
					<td><img src="img/k_nasia.jpg" alt="Näsiä" class="ei-valittu vaarin kasvi"><br />Näsiä</td>
					<td><img src="img/k_lehtokuusama.jpg" alt="Lehtokuusama" class="ei-valittu vaarin kasvi"><br />Lehtokuusama</td>
					<td><img src="img/k_kaenkaali.jpg" alt="Käenkaali" class="ei-valittu vaarin kasvi"><br />Käenkaali</td>
					<td><img src="img/k_metsamasikka.jpg" alt="Metsämansikka" class="ei-valittu oikein kasvi"><br />Metsämansikka</td>
				</tr>
			</table>
			<p>
				<div id="r34pisteet">&nbsp;</div>
				<button id="rasti3_4btn2" class="btn">Tarkista pisteet</button>
			</p>
		</div>
		<div class="modal-footer">
			<button id="rasti3_4btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 3, tarinaruutu -->
	<div id="rasti3_5" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Metsän taloudellinen hyödyntäminen ja luonnon suojelu voivat parhaillaan toimia toisiaan tukevina metsänkätyyömuotoina. Kettulassa kulkee kuusien ja mäntyjen lomassa kunnan hiihtoreitti. Miten muuten metsää voisi hyödyntää? Lähde ottamaan selvää.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti3_5btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 3 -->
	
	<!-- RASTI 4 -->
	<div id="rasti4_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tavoitteletko metsän omistamiselta muutakin kuin tuloja ja suojelua</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Metsänomistajilla on erilaisia tavoitteita oman metsän osalta, jotka vaikuttavat metsän käsittelytapoihin sekä metsän käytön tavoitteisiin</li>
				<li>Metsänomistajien erilaiset tavoitteet tulee yhteensovittaa metsän hoitoa suunniteltaessa</li>
			</ul>
			<button id="rasti4_1btn" class="btn">Miten ympäristöä voitaisiin hyödyntää</button>
		</div>
		<div class="modal-footer">
			<button id="rasti4_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 4, OSA 2 -->
	<div id="rasti4_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Metsän hyödyntämistapoja</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>2D-kuvia ripoteltuna maastoon XXX</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti4_2btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 4, OSA 3 -->
	<div id="rasti4_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Seuraavaan vaiheeseen</h2>
		</div>
		<div class="modal-body">
			<p>Olet suorittanut Metsän käyttömuodot -tehtävät onnistuneesti. Valitse mihin haluat seuraavaksi tutustua</p>
			<ul class="unstyled">
				<li><button id="rasti4_3btn0" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Metsän uudistaminen</li>
				<li><button id="rasti4_3btn1" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Metsäkoneet</li>
				<li><button id="rasti4_3btn2" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Puutavara</li>
			</ul>
		</div>
		<div class="modal-footer">
			<p>Valitse seuraava aihe</p>
		</div>
	</div>
	<!-- /RASTI 4 -->
	
	<!-- RASTI 5 -->
	<div id="rasti5_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tilallasi on 3 ha taimikoita. Tiedätkö mikä taimikko on tai miten metsikkö uudistetaan?</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Taimikko on metsikkö, jossa puiden keskimääräinen läpimitta on alle 8cm</li>
				<li>Tavoitteena on, että kaikista Suomen metsistä taimikoita olisi n. 25%</li>
				<li>Pääset hoitamaan metsäammattilaisen opastuksella oman metsäsi 1,1ha männikön uudistamista</li>
			</ul>
			<button id="rasti5_1btn" class="btn">Katso kuva alueesta</button>
		</div>
		<div class="modal-footer">
			<button id="rasti5_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 5, OSA 2 -->
	<div id="rasti5_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Kuva alueesta</h2>
		</div>
		<div class="modal-body">
			<img src="img/taimikko.jpg" alt="Taimikko">
			<button id="rasti5_2btn" class="btn">Uudista metsä</button>
		</div>
		<div class="modal-footer">
			<button id="rasti5_2btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 5, OSA 3 -->
	<div id="rasti5_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tee valinnat metsänuudistamiseksi</h2>
		</div>
		<div class="modal-body">
			<table>
				<tr>
					<td>Kasvatettava puulaji</td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group" id="r1b1">
								<button class="btn btn-info" id="r1_1_1">mänty</button>
								<button class="btn" id="r1_1_2">kuusi</button>
								<button class="btn" id="r1_1_3">rauduskoivu</button>
							</div>
							<button class="btn" id="r1_1i"><i class="icon-question-sign"></i></button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Uudistamistapa</td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group" id="r1b2">
								<button class="btn btn-info" id="r1_2_1">kylvö</button>
								<button class="btn" id="r1_2_2">istutus</button>
								<button class="btn" id="r1_2_3">luontainen</button>
							</div>
							<button class="btn" id="r1_2i"><i class="icon-question-sign"></i></button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Muokkaustapa</td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group" id="r1b3">
								<button class="btn btn-info" id="r1_3_2">äestys</button>
								<button class="btn" id="r1_3_3">laikutus</button>
								<button class="btn" id="r1_3_4">mätästys</button>
							</div>
							<button class="btn" id="r1_3i"><i class="icon-question-sign"></i></button>
						</div>
					</td>
				</tr>
			</table>
			<button id="rasti5_3btn" class="btn">Katso palaute</button>
		</div>
		<div class="modal-footer">
			<button id="rasti5_3btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 5, OSA 4 -->
	<div id="rasti5_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Taimikon varhaishoito ja kasvun turvaaminen puiden ollessa nuoria on hyvin tärkeää</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Taimikon varhaishoito ja nuorien puiden kasvun turvaaminen talousmetsissä on hyvin tärkeää. Kun metsikkö on uudistettu, on syytä tarkistaa, miten taimikko on lähtenyt kasvamaan. Rehevillä, yleensä kuusen ja koivun kasvupaikoilla, on pidettävä huolta siitä, että heinät ja erilaiset lehtipuut eivät pääse valtaamaan aluetta taimien sijasta. Heinittymistä voi ehkäistä mekaanisesti (jaloilla tallomalla ja vesurilla katkomalla) tai kemiallisesti (suihkuttamalla alueella heinittymisen estoaineilla). Ylimääräisiä lehtipuita kannattaa myös raivata vesurin tai raivaussahan avulla. Taimikosta kannattaa myös tarkistaa taimitiheys eli onko taimia riittävästi vai pitäisikö alueelle tehdä täydennysistutus. Myöhemmässä vaiheessa nuoren metsän raivaukset kannattaa myös hoitaa ajallaan.</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti5_4btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 5, tarinaruutu -->
	<div id="rasti5_5" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Taimikoiden perustaminen ja hoidon turvaaminen on tärkeää, 
			jotta metsästä riittää tasaisesti myyntikelpoista puuta. 
			Metsäkoneet korjaavat puut jatkojalostukseen. 
			Kettulan metsissä on yhteensä 7ha metsää, 
			jossa hoitotoimenpiteitä koneellisesti tehdään. 
			Lähde ottamaan selvää, mitä metsästä voi kestävästi hyödyntää.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti5_5btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- RASTI 5, ylimääräiset -->
	<div id="rasti5_6" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Kuusi, rauduskoivu vai mänty</h2>
		</div>
		<div class="modal-body">
			<p>Kuusi viihtyy parhaiten varjoisilla, kosteilla ja rehevillä kasvupaikoilla</p>
			<p>Rauduskoivu on myös rehevien kasvupaikkojen puu, mutta se on ns. valopuu ja kestää sen vuoksi varjoisuutta kuusta huonommin</p>
			<p>Mänty on myös valopuu, eli se kaipaa valoa ja laadultaan parhaiten se kasvaa melko kuivilla kasvupaikoilla</p>
		</div>
		<div class="modal-footer">
			<button id="rasti5_6btn" class="btn btn-primary">Takaisin</button>
		</div>
	</div>
	
	<div id="rasti5_7" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Kylvö, istutus vai luontainen uudistaminen</h2>
		</div>
		<div class="modal-body">
			<p>Kylvö tarkoittaa uudistamista puun siemenillä ja menetelmä toimii parhaiten männyllä uudistettaessa</p>
			<p>Istutuksessa metsikkö uudistetaan puun taimilla, joka on sekä varmin että kallein uudistustapa. Toimii kaikilla puulajeilla, mutta sopii erityisesti reheville kuusen ja koivun kasvupaikoille, jotka heinittyvät nopeasti</p>
			<p>Luontainen uudistaminen toimii silloin, kun alueelta löytyy riittävästi hyviä siemenpuita, minkä vuoksi menetelmä on käytetyin männyn kuivahkoilla kasvupaikoilla. Toimii kuitenkin myös nuorena nopeakasvuisen koivun kanssa</p>
		</div>
		<div class="modal-footer">
			<button id="rasti5_7btn" class="btn btn-primary">Takaisin</button>
		</div>
	</div>
	<div id="rasti5_8" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Äestys, mätästys vai laikutus</h2>
		</div>
		<div class="modal-body">
			<p>Äestyksessä metsä-traktorin muokkauslautasilla paljastetaan kivennäismaata enintään 10 cm syvyydeltä lähes yhtäjaksoisena vakona. Sopii useimpiin paikkoihin, mutta ei kovin savisille ja märille alueille</p>
			<p>Mätästyksessä kaivinkoneen koura kauhaisee maasta laikun, joka käänetään ylösalaisin, jolloin kivennäismaa tai turve tulee näkyviin. Sopii erityisesti heinittyville, tulviville tai routiville kasvupaikoille ja menetlmää käytetäänkin erityisesti kuusen istutuksen yhteydessä</p>
			<p>Laikutus toimii kuten mätästys, mutta siinä maasta kauhaistua laikkua ei käättenä ympäri. Menetelmä toimii erityisesti karkeilla ja kivisillä mailla, ja laikutusta käytetään erityisesti kylvön tai luontaisen uudistamisen yhteydessä</p>
		</div>
		<div class="modal-footer">
			<button id="rasti5_8btn" class="btn btn-primary">Takaisin</button>
		</div>
	</div>
	<div id="rasti5_9" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Palaute</h2>
		</div>
		<div class="modal-body">
			<p>Mikään uudistamisessa käytettävistä yhdistelmistä ei ole mahdoton, mutta tämä kuivahko harjoympäristö kannattaisi uudistaa männyllä, jonka uudistamismenetelmänä voitaisiin hyvin käyttää luontaista uudistamista tai kylvöä ja maanmuokkaustapana esimerkiksi laikutusta</p>
			<button id="rasti5_9btn" class="btn">Taimikon varhaishoito</button>
		</div>
		<div class="modal-footer">
			<button id="rasti5_9btn2" class="btn btn-primary">Takaisin</button>
		</div>
	</div>
	<!-- /RASTI 5 -->
	
	<!-- RASTI 6 -->
	<div id="rasti6_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Metsäkoneet korjaavat puutavaran metsiköstäsi</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Sinulle kertyy puunmyyntituloja mm. harvennuksista kuitupuu ja tukkipuu, päätehakkuussa kuitu-, tukki-, ja energiapuu</li>
				<li>Harvesteri korjaa puutavaran talteen puutavaralajeittain ja ajokone kuljettaa korjatun puutavaran tienvarteen</li>
				<li>Suomen metsien hakkuista tehdään n. 98% koneellisesti. Metsurit tekevät manuaalisesti korjuita mm. maisema- ja erityiskohteilla</li>
			</ul>
			<button id="rasti6_1btn" class="btn">Mikä on harvesteri?</button>
		</div>
		<div class="modal-footer">
			<button id="rasti6_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 6, OSA 2 -->
	<div id="rasti6_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Harvesteri</h2>
		</div>
		<div class="modal-body">
			<img src="img/metsakone.jpg" alt="Metsäkone töissä">
		</div>
		<div class="modal-footer">
			<button id="rasti6_2btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 6, OSA 3 -->
	<div id="rasti6_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Harvesteri katkoo puiden rungot puutavaralajeiksi. Mitä puutavaralajit ovat?</p>
		</div>
		<div class="modal-footer">
			<button id="rasti6_3btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 6 -->
	
	<!-- RASTI 7 -->
	<div id="rasti7_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Puuta myydessä harvesteri katkoo puutavaran puutavaralajeiksi</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Talouskäytössä olevan metsikön hoidon tavoitteena on maksimoida puuta myydessä saatava tulo. Kasvattamalla mahdollisimman järeää, tervettä, oksatonta ja suoraa puutavaraa, tämä tulo maksimoidaan.</li>
				<li>Puutavaralaji tarkoittaa puun rungon katkomista ennalta asetettujen mitta- ja laatuvaatimusten mukaisesti</li>
				<li>Mitta- ja laatuvaatimukset pohjautuvat puun jalostus- ja loppukäyttövaatimuksiin</li>
			</ul>
			<button id="rasti7_1btn" class="btn">Miten puutavaran katkominen tapahtuu?</button>
		</div>
		<div class="modal-footer">
			<button id="rasti7_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 7, OSA 2 -->
	<div id="rasti7_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Puunkorjuu ja puun katkominen puutavaralajeiksi</h2>
		</div>
		<div class="modal-body">
			<p>Kuva</p>
			<button id="rasti7_2btn" class="btn">Katko mänty puutavaralajeiksi</button>
		</div>
		<div class="modal-footer">
			<button id="rasti7_2btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 7, OSA 3 -->
	<div id="rasti7_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Apteerauskuva</h2>
		</div>
		<div class="modal-body">
			<p>Kuva läpinäkyvä, jolla tähdätään maastosta löytyvää puuta.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti7_3btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 7, OSA 4 -->
	<div id="rasti7_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Olet suorittanut Metsänhoito-tehtävät onnistuneesti. Valitse mihin haluat seuraavaksi tutustua</h2>
		</div>
		<div class="modal-body">
			<ul class="unstyled">
				<li><button id="rasti7_4btn1" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Tukkipuu</li>
				<li><button id="rasti7_4btn2" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Kuitupuu</li>
				<li><button id="rasti7_4btn3" class="btn btn-primary"><i class="icon-hand-right icon-white"></i></button> Metsäenergia</li>
			</ul>
		</div>
		<div class="modal-footer">
			<p>Valitse seuraava kohde</p>
		</div>
	</div>
	<!-- RASTI 7, tarinaruutu -->
	<div id="rasti7_5" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Kettulan tilalla tapaat metsäammattilaisen, 
			joka on tullut sinua neuvomaan metsän uudistamisessa ja 
			uuden taimikon perustamisessa. 
			Lähde keskustelemaan ammattilaisen kanssa, miten männikkösi kannattaa uudistaa.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti7_5btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 7 -->
	
	<!-- RASTI 8 -->
	<div id="rasti8_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tukkipuut päätyvät metsästäsi sahalle</h2>
		</div>
		<div class="modal-body">
			<img src="img/sahat_kartalla.jpg" alt="Sahat kartalla">
			<button id="rasti8_1btn" class="btn">Tukin sahaaminen</button>
		</div>
		<div class="modal-footer">
			<button id="rasti8_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 8, OSA 2 -->
	<div id="rasti8_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Teet kettulan metsästä kaadetuista tukeista kotitalosi terassilaudoitusta. Valitse käyttötarkoituksen mukaan paras tapa sahata tukit.</h2>
		</div>
		<div class="modal-body">
			<table>
				<tr>
					<td>
						<div id="gridit">
							<img src="img/grid0.gif" id="selected_grid" alt="0">
						</div>
					</td>
					<td>
						<div class="grid">
							<img src="img/grid1.gif" class="grid_img" alt="1">
						</div>
					</td>
					<td>
						<div class="grid">
							<img src="img/grid2.gif" class="grid_img" alt="2">
						</div>
					</td>
				</tr>
			</table>
			
			<p>Tulos: metreissä <span id="r82tulos">0</span> puutavaraa</p>
			<p>Puutavaran lisäksi sahauksen sivutuotteena syntyy purua, kuorta ja haketettavaa pintalautaa</p>
		</div>
		<div class="modal-footer">
			<button id="rasti8_2btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 8, OSA 3 -->
	<div id="rasti8_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Kuitupuu on pääsääntöisesti pieniläpimittaista &lt; 15cm puutavaraa, joka puulajista riippuen keitetään tai hierretään sellukuiduiksi.
			Syntyvästä kuitumassasta voidaan valmistaa erilaisia tuotteita, niin perinteisiä kuin hieman innovatiivisempiäkin.
			Katso mitä Kettulaan perustamasi taimikon kasvaessa ensiharvennuskokoon, metsiköstäsi korjattavasta puutavarasta voidaan valmistaa.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti8_3btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 8 -->
	
	<!-- RASTI 9 -->
	<div id="rasti9_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Kuitupuut päätyvät metsästäsi sellutehtaalle</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Älypakkaukset</li>
				<li>Vaatteet</li>
				<li>Innovaatiot</li>
			</ul>
			<button id="rasti9_1btn" class="btn">Testaa tietosi</button>
		</div>
		<div class="modal-footer">
			<button id="rasti9_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 9, OSA 2 -->
	<div id="rasti9_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Mitkä oheisista tuotteista on tehty kokonaan tai osittain puusta?</h2>
		</div>
		<div class="modal-body">
			<p>Valitse oikeat vaihtoehdot</p>
			<table>
				<tr>
					<td><img class="ei-valittu oikein tuote" src="img/t_virsu.jpg" alt="Tuohituotteet"><br>Tuohituotteet</td>
					<td><img class="ei-valittu oikein tuote" src="img/t_kartonki.jpg" alt="Kartonki"><br>Kartonki</td>
					<td><img class="ei-valittu oikein tuote" src="img/t_ksylitoli.jpg" alt="Ksylitoli"><br>Ksylitoli</td>
					<td><img class="ei-valittu oikein tuote" src="img/t_paperi.jpg" alt="Paperi"><br>Paperi</td>
					<td><img class="ei-valittu oikein tuote" src="img/t_sahko.jpg" alt="Sähkö"><br>Sähkö</td>
					<td><img class="ei-valittu oikein tuote" src="img/t_viskoosi.jpg" alt="Viskoosi"><br>Viskoosi</td>
				</tr>
			</table>
			<div id="r92pisteet"></div>
			<button id="rasti9_2btn2" class="btn">Tarkista pisteet</button>
		</div>
		<div class="modal-footer">
			<button id="rasti9_2btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 9, OSA 3 -->
	<div id="rasti9_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Runkopuu hyödynnetään tukkina ja kuituna, mutta mitä muuta voidaan metsästä hyödyntää? 
			Metsäenergialla tarkoitetaan energiapuusta eli hakkuutähteistä ja kannoista saatavaa energiaa.
			Metsäenergian käyttö Suomessa on voimakkaasti lisääntynyt. Vuonna 2005 metsäenergian käyttö oli 2,6 mil. m<sup>3</sup>,
			vuonna 2010 jo 6,2 milj. m<sup>3</sup>. Suomn uusiutuvista energianlähteistä metsäenergialla on potentiaalia vielä kasvaa.
			Lähde katsomaan mitä energiaa puusta voidaan tuottaa.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti9_3btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 9 -->
	
	<!-- RASTI 10 -->
	<div id="rasti10_1" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Metsäenergiaa tehdään kannoista ja hakkuutähteistä sekä metsäteollisuuden sivutuotteista</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Metsää myydessäsi voit myydä metsästä puutavaran lisäksi energiaksi kelpaavaa materiaalia, kuten kantoja ja hakkuutähteitä
					<ul>
						<li>Kannoista ja hakkuutähteistä tehdään metsäenergiaa murskaamalla ja polttamalla ne polttolaitoksilla</li>
					</ul>
				</li>
				<li>Metsäteollisuus tuottaa puun jalostuksen sivutuotteina mm. sellunkeitosta mustalipeää ja sahoilla purua ja kuorta
					<ul>
						<li>Teollisuus käyttää useimmiten syntyneet sivutuotteet itse energian tuotantoon</li>
					</ul>
				</li>
			</ul>
			<button id="rasti10_1btn" class="btn">Katso prosessi</button>
		</div>
		<div class="modal-footer">
			<button id="rasti10_1btn2" class="btn btn-primary">Siirry eteenpäin</button>
		</div>
	</div>
	<!-- RASTI 10, OSA 2 -->
	<div id="rasti10_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Prosessiketju, jossa tuotetaan lopputuotteita runkopuusta, metsähakkeesta ja kantomurskeesta</h2>
		</div>
		<div class="modal-body">
			<p>Valitse oikea vaihtoehto</p>
		</div>
		<div class="modal-footer">
			<button id="rasti10_2btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 10, OSA 3 -->
	<div id="rasti10_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Kettulan metsästä korjattu mäntypuutavara olisi mainiota rakennuspuuta. 
			Kotitalosi terassia laajennetaan. Lähde katsomaan sopivaa sahaa, jossa tukit voisi sahata. 
			Kuinka paljon yhdestä tukista tulee käyttötarkoitukseen sopivaa lautaa?</p>
		</div>
		<div class="modal-footer">
			<button id="rasti10_3btn" class="btn btn-primary">Näytä seuraava rasti</button>
		</div>
	</div>
	<!-- /RASTI 10 -->
	
	<!-- KOONTINÄYTTÖ -->
	<div id="pisteet" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Koontinäyttö</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Metsässä sinulle on tärkeää ___</li>
				<li>Männyn tilavuus ___ ja arvo ___</li>
				<li>Tunnistit x tärkeää luontotyyppiä xstä</li>
				<li>Löysit x kasvia xstä</li>
				<li>Valitsit metsänuudistamiseen tapa/puulaji/muokkaus</li>
				<li>Onnistuit sahaamaan terassilautaa ___m</li>
				<li>Tunnistit x/x puusta tehtyä tuotetta</li>
			</ul>
			<button id="pisteet_btn" class="btn btn-primary">TALLENNA</button> 
		</div>
		<div class="modal-footer">
			<p>Olet nyt suorittanut luontopolun</p>
		</div>
	</div>
	<!-- /KOONTINÄYTTÖ -->
	
	<!-- KARTTA -->
	<div id="kartta" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Seuraavan rastin sijainti</h2>
		</div>
		<div class="modal-body">
		</div>
		<div class="modal-footer">
			<p>Kulje seuraavalle rastille 
				
			</p>
		</div>
	</div>
	<!-- /KARTTA -->
	<button id="kartta1_btn" class="btn btn-primary">1</button> 
	<button id="kartta2_btn" class="btn btn-primary">2</button> 
	<button id="kartta3_btn" class="btn btn-primary">3</button> 
	<button id="kartta4_btn" class="btn btn-primary">4</button> 
	<button id="kartta5_btn" class="btn btn-primary">5</button> 
	<button id="kartta6_btn" class="btn btn-primary">6</button> 
	<button id="kartta7_btn" class="btn btn-primary">7</button> 
	<button id="kartta8_btn" class="btn btn-primary">8</button> 
	<button id="kartta9_btn" class="btn btn-primary">9</button> 
	<button id="kartta10_btn" class="btn btn-primary">10</button> 
	
	<script src="jquery.js"></script>
	<script src="js/gps.js"></script>
	<script>
	// Ohjelman muuttujat
	var currentTask = 0,
		r_ekaValinta = 0,
		v_uudistamistapa = "",
		v_puulaji = "",
		v_maanmuokkaustapa = "",
		v_metsassatarkeaa = "",
		v_tilavuus = "",
		v_arvo = "",
		v_luontotyypit = 0,
		v_kasvit = 0,
		v_kasvit_pisteet = 0,
		v_suojelu_pisteet = 0,
		v_tuotteet_pisteet = 0,
		v_lautaa = 0,
		v_tuotteet = 0;

	// Suoritetut rastit
	var suoritetut_rastit = new Array();
		suoritetut_rastit[0] = 0; // Perustietoa
		suoritetut_rastit[1] = 0; // Talous
		suoritetut_rastit[2] = 0; // Suojelu
		suoritetut_rastit[3] = 0; // Monikäyttö
		suoritetut_rastit[4] = 0; // Uudistaminen
		suoritetut_rastit[5] = 0; // Metsäkoneet
		suoritetut_rastit[6] = 0; // Puutavara
		suoritetut_rastit[7] = 0; // Tukkipuu
		suoritetut_rastit[8] = 0; // Kuitupuu
		suoritetut_rastit[9] = 0; // Metsäenergia
		suoritetut_rastit[10] = 0; 

	// Rastien kätkeminen, painikkeiden toiminta
	var kartta_div  = $("#kartta"),
		rasti0_div  = $("#rasti0"),

		rasti1_1div = $("#rasti1_1"), 
		rasti1_2div = $("#rasti1_2"),
		rasti1_3div = $("#rasti1_3"),
		rasti1_4div = $("#rasti1_4"),

		rasti2_1div = $("#rasti2_1"),
		rasti2_2div = $("#rasti2_2"),
		rasti2_3div = $("#rasti2_3"),
		rasti2_4div = $("#rasti2_4"),
		rasti2_5div = $("#rasti2_5"),

		rasti3_1div = $("#rasti3_1"),
		rasti3_2div = $("#rasti3_2"),
		rasti3_3div = $("#rasti3_3"),
		rasti3_4div = $("#rasti3_4"),
		rasti3_5div = $("#rasti3_5"),

		rasti4_1div = $("#rasti4_1"),
		rasti4_2div = $("#rasti4_2"),
		rasti4_3div = $("#rasti4_3"),

		rasti5_1div = $("#rasti5_1"),
		rasti5_2div = $("#rasti5_2"),
		rasti5_3div = $("#rasti5_3"),
		rasti5_4div = $("#rasti5_4"),
		rasti5_5div = $("#rasti5_5"),
		rasti5_6div = $("#rasti5_6"),
		rasti5_7div = $("#rasti5_7"),
		rasti5_8div = $("#rasti5_8"),
		rasti5_9div = $("#rasti5_9"),

		rasti6_1div = $("#rasti6_1"),
		rasti6_2div = $("#rasti6_2"),
		rasti6_3div = $("#rasti6_3"),

		rasti7_1div = $("#rasti7_1"),
		rasti7_2div = $("#rasti7_2"),
		rasti7_3div = $("#rasti7_3"),
		rasti7_4div = $("#rasti7_4"),
		rasti7_5div = $("#rasti7_5"),

		rasti8_1div = $("#rasti8_1"),
		rasti8_2div = $("#rasti8_2"),
		rasti8_3div = $("#rasti8_3"),

		rasti9_1div = $("#rasti9_1"),
		rasti9_2div = $("#rasti9_2"),
		rasti9_3div = $("#rasti9_3"),

		rasti10_1div = $("#rasti10_1"),
		rasti10_2div = $("#rasti10_2"),
		rasti10_3div = $("#rasti10_3"),

		bearingDiv = $("#bearing");

	// Asetetaan kaikki rasti-ikkunat aluksi piiloon
	var rastidivit = $('div.rasti');
	rastidivit.hide();
	rasti0_div.show();

	// TEMP: Triggerpainikkeet, TODO: POISTA valmiista
	$("button.close").on("click", function()
		{
			closeAll();
		});
	$("button#r1trigger").on("click", function()
		{
			rastidivit.hide();
			rasti1_1div.show();
		});
	$("button#r2trigger").on("click", function()
		{
			rastidivit.hide();
			rasti2_1div.show();
		});

	function closeAll()
	{
		rastidivit.hide();
	}

	// ***********************************
	// Painikkeet rasteilla navigointiin *
	// ***********************************
	$("button.btn").on("click", function()
		{
			var id = $(this).attr("id");
			if(id !== "rasti2_4btn2" 
				&& id !== "r1_1_1"
				&& id !== "r1_1_2"
				&& id !== "r1_1_3"
				&& id !== "r1_2_1"
				&& id !== "r1_2_2"
				&& id !== "r1_2_3"
				&& id !== "r1_3_1"
				&& id !== "r1_3_2"
				&& id !== "r1_3_3"
				&& id !== "r1_3_4"
				&& id !== "r1_4_1"
				&& id !== "r1_4_2"
				&& id !== "r1_4_3"
				&& id !== "rasti3_2btn3"
				&& id !== "rasti3_4btn2"
				&& id !== "rasti9_2btn2")
				rastidivit.hide();
			
			switch(id)
			{
				// RASTI 0
				case "rasti0_btn":
					suoritetut_rastit[0] = 1;
					currentTask = 1;
					rasti1_1div.show();
				break;
				// RASTI 1
				case "rasti1_1btn2":
					rasti1_2div.show();
				break;
				case "rasti1_1btn":
					rasti1_3div.show();
				break;
				case "rasti1_2btn":
					rasti1_1div.show();
				break;
				// (Fix selection)
				case "rasti1_3btn0":
					rasti1_4div.show();
					v_metsassatarkeaa = "monikäyttö";
					$("#r1tarkeaa").html("monikäyttöön");
				break;
				case "rasti1_3btn1":
					rasti1_4div.show();
					v_metsassatarkeaa = "talous";
					$("#r1tarkeaa").html("taloudelliseen hyödyntämiseen");
				break;
				case "rasti1_3btn2":
					rasti1_4div.show();
					v_metsassatarkeaa = "monikäyttö";
					$("#r1tarkeaa").html("monikäyttöön");
				break;
				case "rasti1_3btn3":
					rasti1_4div.show();
					v_metsassatarkeaa = "suojelu";
					$("#r1tarkeaa").html("suojeluun");
				break;
				case "rasti1_3btn4":
					rasti1_4div.show();
					v_metsassatarkeaa = "suojelu";
					$("#r1tarkeaa").html("suojeluun");
				break;
				case "rasti1_4btn":
					var seuraava_rasti = getNextTask(1);
					suoritetut_rastit[seuraava_rasti] = 1;
					// kartta_div.show();
				break;
				// RASTI 2
				case "rasti2_1btn":
					rasti2_2div.show();
				break;
				case "rasti2_1btn2":
					rasti2_5div.show();
				break;
				case "rasti2_2btn":
					rasti2_3div.show();
				break;
				case "rasti2_2btn2":
					rasti2_1div.show();
				break;
				case "rasti2_3btn":
					rasti2_4div.show();
				break;
				case "rasti2_3btn2":
					rasti2_2div.show();
				break;
				case "rasti2_4btn":
					rasti2_3div.show();
				break;
				case "rasti2_4btn2":
					calculateTreeValue();
				break;
				case "rasti2_5btn":
					// kartta_div.show();
				break;
				// RASTI 3
				case "rasti3_1btn":
					rasti3_3div.show();
				break;
				case "rasti3_1btn2":
					rasti3_5div.show();
				break;
				case "rasti3_2btn":
					rasti3_4div.show();
				break;
				case "rasti3_2btn2":
					rasti3_1div.show();
				break;
				case "rasti3_3btn":
					rasti3_2div.show();
				break;
				case "rasti3_4btn":
					rasti3_2div.show();
				break;
				case "rasti3_5btn":
					// kartta_div.show();
				break;
				// RASTI 4
				case "rasti4_1btn":
					rasti4_2div.show();
				break;
				case "rasti4_1btn2":
					rasti4_3div.show();
				break;
				case "rasti4_2btn":
					rasti4_1div.show();
				break;
				// RASTI 5
				case "rasti5_1btn":
					rasti5_2div.show();
				break;
				case "rasti5_1btn2":
					rasti5_5div.show();
				break;
				case "rasti5_2btn":
					rasti5_3div.show();
				break;
				case "rasti5_2btn2":
					rasti5_1div.show();
				break;
				case "rasti5_3btn":
					rasti5_9div.show();
				break;
				case "rasti5_3btn2":
					rasti5_2div.show();
				break;
				case "rasti5_4btn":
					rasti5_3div.show();
				break;
				case "rasti5_5btn":
					// kartta_div.show();
				break;
				case "rasti5_6btn":
					rasti5_3div.show();
				break;
				case "rasti5_7btn":
					rasti5_3div.show();
				break;
				case "rasti5_8btn":
					rasti5_3div.show();
				break;
				case "rasti5_9btn":
					rasti5_4div.show();
				break;
				case "rasti5_9btn2":
					rasti5_3div.show();
				break;
				// RASTI 6
				case "rasti6_1btn":
					rasti6_2div.show();
				break;
				case "rasti6_1btn2":
					rasti6_3div.show();
				break;
				case "rasti6_2btn":
					rasti6_1div.show();
				break;
				case "rasti6_3btn":
					// kartta_div.show();
				break;
				// RASTI 7
				case "rasti7_1btn":
					rasti7_2div.show();
				break;
				case "rasti7_1btn2":
					rasti7_4div.show();
				break;
				case "rasti7_2btn":
					rasti7_3div.show();
				break;
				case "rasti7_2btn2":
					rasti7_1div.show();
				break;
				case "rasti7_3btn":
					rasti7_2div.show();
				break;
				case "rasti7_4btn1":
					rasti10_3div.show(); //Tarinaruutu ennen rastia
				break;
				case "rasti7_4btn2":
					rasti8_3div.show(); //Tarinaruutu ennen rastia
				break;
				case "rasti7_4btn3":
					rasti9_3div.show(); //Tarinaruutu ennen rastia
				break;
				case "rasti7_5btn":
					// kartta_div.show();
				break;
				// RASTI 8
				case "rasti8_1btn":
					rasti8_2div.show();
				break;
				case "rasti8_1btn2":
					rasti8_3div.show();
				break;
				case "rasti8_2btn":
					rasti8_1div.show();
				break;
				case "rasti8_3btn":
					// kartta_div.show();
				break;
				// RASTI 9
				case "rasti9_1btn":
					rasti9_2div.show();
				break;
				case "rasti9_1btn2":
					rasti9_3div.show();
				break;
				case "rasti9_2btn":
					rasti9_1div.show();
				break;
				case "rasti9_3btn":
					// kartta_div.show();
				break;
				// (Fix selection)
				case "rasti4_3btn0":
				case "rasti4_3btn1":
				case "rasti4_3btn2":
					// kartta_div.show();
				break;
				// KARTTA
				case "kartta1_btn":
					rasti0_div.show();
				break;
				case "kartta2_btn":
					rasti2_1div.show();
				break;
				case "kartta3_btn":
					rasti3_1div.show();
				break;
				case "kartta4_btn":
					rasti4_1div.show();
				break;
				case "kartta5_btn":
					rasti5_1div.show();
				break;
				case "kartta6_btn":
					rasti6_1div.show();
				break;
				case "kartta7_btn":
					rasti7_1div.show();
				break;
				case "kartta8_btn":
					rasti8_1div.show();
				break;
				case "kartta9_btn":
					rasti9_1div.show();
				break;
				case "kartta10_btn":
					rasti10_1div.show();
				break;
				// Multiple-choise buttons (handled elsewhere)
				case "r1_1_1":
					v_puulaji = "mänty";
				break;
				case "r1_1_2":
					v_puulaji = "kuusi";
				break;
				case "r1_1_3":
					v_puulaji = "rauduskoivu";
				break;
				case "r1_2_1":
					v_uudistamistapa = "kylvö";
				break;
				case "r1_2_2":
					v_uudistamistapa = "istutus";
				break;
				case "r1_2_3":
					v_uudistamistapa = "luontainen";
				break;
				case "r1_3_2":
					v_maanmuokkaustapa = "äestys";
				break;
				case "r1_3_3":
					v_maanmuokkaustapa = "laikutus";
				break;
				case "r1_3_4":
					v_maanmuokkaustapa = "mätästys";
				break;
				case "r1_1i":
					rasti5_6div.show();
				break;
				case "r1_2i":
					rasti5_7div.show();
				break;
				case "r1_3i":
					rasti5_8div.show();
				break;
				case "rasti3_2btn3":
					v_suojelu_pisteet = Math.max(0, v_suojelu_pisteet);
					$("#r32pisteet").html(v_suojelu_pisteet + "/5 oikein");
				break;
				case "rasti3_4btn2":
					v_kasvit_pisteet = Math.max(0, v_kasvit_pisteet);
					$("#r34pisteet").html(v_kasvit_pisteet + "/3 oikein");
				break;
				case "rasti9_2btn2":
					v_tuotteet_pisteet = Math.max(0, v_tuotteet_pisteet);
					$("#r92pisteet").html(v_tuotteet_pisteet + "/6 oikein");
				break;
				default:
					alert("Not implemented yet exception");
				break;
			}
		});

	var rasti1btns1 = $("#r1b1 button.btn").on("click", function()
		{
			rasti1btns1.removeClass("btn-info");
			$(this).addClass("btn-info");
		});

	var rasti1btns2 = $("#r1b2 button.btn").on("click", function()
		{
			rasti1btns2.removeClass("btn-info");
			$(this).addClass("btn-info");
		});
	var rasti1btns3 = $("#r1b3 button.btn").on("click", function()
		{
			rasti1btns3.removeClass("btn-info");
			$(this).addClass("btn-info");
		});
	var rasti1btns4 = $("#r1b4 button.btn").on("click", function()
		{
			rasti1btns4.removeClass("btn-info");
			$(this).addClass("btn-info");
		});

	function calculateTreeValue()
	{
		var pituus    = $("#rasti2_4input1").val(),
			lapimitta = $("#rasti2_4input2").val(),
			tilavuus  = $("#rasti2_4input3"),
			arvo      = $("#rasti2_4input4"),
			r;

		pituus = parseFloat(pituus);
		lapimitta = parseFloat(lapimitta);
		if(!Number(pituus)) { alert("Virheellinen arvo pituudella"); return;}
		if(!Number(lapimitta)) { alert("Virheellinen arvo läpimitalla"); return;}

		volume = 0.4 * Math.pow(lapimitta, 2) * pituus;
		value = 0.05 * (volume * 1000);
		volume = Math.round(volume);
		value = Math.round(value);
		tilavuus.val(volume);
		arvo.val(value);
	}

	function getNextTask(curr)
	{
		if(curr == 1)
		{
			if(r_ekaValinta == 0)
			{
				if(v_metsassatarkeaa == "suojelu")
				{
					r_ekaValinta = 3;
					return 3;
				}
				else if (v_metsassatarkeaa == "talous")
				{
					r_ekaValinta = 2;
					return 2;
				}
				else if (v_metsassatarkeaa == "monikäyttö")
				{
					r_ekaValinta = 4;
					return 4;
				}
			}
			else
			{
				if(suoritetut_rastit[2] == 0)
					return 2;
				else if (suoritetut_rastit[3] == 0)
					return 3;
				else if(suoritetut_rastit[4] == 0)
					return 4;
				else return 5;
			}
		}
	}
	

	// KASVIEN VALINTA
	$('img.kasvi').on("click", function()
		{
			$(this).removeClass("ei-valittu");
			if($(this).hasClass("oikein"))
			{
				v_kasvit_pisteet++;
			}
			else
			{
				v_kasvit_pisteet--;
			}
		});

	// suojelukohteiden valinta
	$('img.suojelu').on("click", function()
		{
			$(this).removeClass("ei-valittu");
			if($(this).hasClass("oikein"))
			{
				v_suojelu_pisteet++;
			}
			else
			{
				v_suojelu_pisteet--;
			}
		});

	// tuotteiden valinta
	$('img.tuote').on("click", function()
		{
			$(this).removeClass("ei-valittu");
			if($(this).hasClass("oikein"))
			{
				v_tuotteet_pisteet++;
			}
			else
			{
				v_tuotteet_pisteet--;
			}
		});

	//Gridin valinta
	$("img.grid_img").on("click", function()
		{
			var src = $(this).attr("src");
			var metrit = $(this).attr("alt");
			$("#selected_grid").attr("src", src);
			$("#r82tulos").html(metrit);
		});
	</script>
</body>
</html>