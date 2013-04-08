<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metsäkeskus AR</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	
	<h1>Metsäkeskus AR<img src="img/arrow.png" style="float: right" alt="Bearing" id="bearing"></h1> 
	
	<div id="positionDiv" class="alert alert-info">No position, yet!</div>
	
	<div class="wrapper">
		<!-- <div id="map">
		</div> -->
		<a href="" id="showlocbutton">Show location</a>
		<div id="results">
			<span id="lattitude"></span><br>
			<span id="longitude"></span><br>
			<span id="time"></span><br>
			
			<span id="rasti"></span><br>
			<button class="btn" id="r1trigger">Trigger rasti 1</button><br>
			<button class="btn" id="r2trigger">Trigger rasti 2</button>
		</div>
	</div>
	
	
	<!-- ALOITUSRUUTU: -->
	<div id="rasti0" class="rasti modal">
		<div class="modal-header">
			<!-- <button type="button" class="close">&times;</button> -->
			<h2>Perit 10 ha metsää Pohjanmaan Kerttulan kylältä läheltä Kauhavaa. Sinulla ei ole ollut aiemmin metsää. Metsän kestävä ja sinun tavoitteiden mukainen käyttö on sinulle uusi asia. Lähdet tutustumaan metsänkäytön perusasioihin.</h2>
			<!-- <span>Kokonaisuus 2, rasti 1, osa 1</span> -->
		</div>
		<div class="modal-body">
			<p>Kuva metsätilasta (Anne N.)</p>
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
			<ul>
				<li>metsien pinta-ala 23 milj. ha, 76% koko maan pinta-alasta</li>
				<li>yksityiset henkilöt omistavat 60% Suomen metsistä</li>
				<li>yksityisiä metsänomistajia 737 000. Joka 7. suomalainen omistaa metsää</li>
				<li>loput metsät kuuluvat valtiolle (26%), yhtiöille (9%) ja muille tahoille (5%)</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti1_1btn" class="btn btn-primary">Siirry eteenpäin</button>
			<button id="rasti1_1btn2" class="btn btn-primary">Metsäalan toimijoita</button>
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
	
	<!-- RASTI1: OSA: 2 -->
	<!-- <div id="rasti1_2" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Miten uudistaisit tämän taimikon?</h2>
		</div>
		<div class="modal-body">
			<table>
				<tr>
					<td>Kasvatettava puulaji</td>
					<td>
						<div class="btn-group" id="r1b1">
							<button class="btn btn-info" id="r1_1_1">mänty</button>
							<button class="btn" id="r1_1_2">kuusi</button>
							<button class="btn" id="r1_1_3">rauduskoivu</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Uudistamistapa</td>
					<td>
						<div class="btn-group" id="r1b2">
							<button class="btn btn-info" id="r1_2_1">kylvö</button>
							<button class="btn" id="r1_2_2">istutus</button>
							<button class="btn" id="r1_2_3">luontainen</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Muokkaustapa</td>
					<td>
						<div class="btn-group" id="r1b3">
							<button class="btn btn-info" id="r1_3_1">kulotus</button>
							<button class="btn" id="r1_3_2">äestys</button>
							<button class="btn" id="r1_3_3">laikutus</button>
							<button class="btn" id="r1_3_4">mätästys</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Jälkihoitotoimenpiteet</td>
					<td>
						<div class="btn-group" id="r1b4">
							<button class="btn btn-info" id="r1_4_1">täydennysistutus</button>
							<button class="btn" id="r1_4_2">heinäys</button>
							<button class="btn" id="r1_4_3">perkaus</button>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="modal-footer">
			<button id="rasti1_2_btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div> -->
	
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
			<p>Ensin pääset tutustumaan metsän taloudelliseen hyödyntämiseen, suojeluun ja monikäyttöön. OIKEA RASTI VALINNAN MUKAAN</p>
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
		</div>
		<div class="modal-footer">
			<button id="rasti2_1btn" class="btn btn-primary">Mikä on sinun metsätilasi arvo?</button>
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
		</div>
		<div class="modal-footer">
			<button id="rasti2_2btn" class="btn btn-primary">Miten mittaan puun tilavuuden?</button>
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
			<p>Video 1 (puun tilavuus)</p>
			<p>Video 2 (puun lpm)</p>
		</div>
		<div class="modal-footer">
			<button id="rasti2_3btn" class="btn btn-primary">Laske puun arvo</button>
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
				<tr><td>pituus</td><td><input id="rasti2_4input1" type="text" value="0" /></td></tr>
				<tr><td>läpimitta</td><td><input id="rasti2_4input2" type="text" value="0" /></td></tr>
				<tr><td><b>tilavuus</b></td><td><input id="rasti2_4input3" type="text" value="0" disabled /></td></tr>
				<tr><td><b>arvo</b></td><td><input id="rasti2_4input4" type="text" value="0" disabled /></td></tr>
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
				<ul>
					<li><a href="#">Katso kuvaesimerkit luontotyypeistä</a></li>
				</ul>
				<li>Suojelun tavoitteet</li>
				<ul>
					<li>luontoarvoiltaan merkittäviä kohteita hyvin vähän</li>
					<li>elinympäristöjen esiintyminen turvattava</li>
					<li>harvinainen, uhanalainen lajisto</li>
				</ul>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti3_1btn" class="btn btn-primary">Mikä on METSO?</button>
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
			<ul>
				<li>Kuvia tärkeistä luontotyypeistä XXX</li>
				<li>kuvia ja luontotyyppien nimet</li>
				<ul>
					<li>lähteiden ja purojen välittömät lähiympäristöt</li>
					<li>ruoho- ja heinäkorvet</li>
					<li>rehevät lehtolaikut</li>
					<li>pienet kangasmetsäsaarekkeet ojittamattomilla soilla</li>
					<li>rotkot ja kurut</li>
					<li>jyrkänteet ja niiden välittömät alusmetsät</li>
					<li>karukkokankaita</li>
				</ul>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti3_2btn" class="btn btn-primary">Mitä kasveja ympäristäsi löydät</button>
			<button id="rasti3_2btn2" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 3, OSA 3 -->
	<div id="rasti3_3" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Näitä luontotyyppejä on tärkeä suojella</h2>
		</div>
		<div class="modal-body">
			<ul>
				<li>Mitä kasveja löydät ympäriltäsi? Klikkaa löytämiesi kasvien kuvia.</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button id="rasti3_3btn" class="btn btn-primary">Edellinen</button>
		</div>
	</div>
	<!-- RASTI 3, tarinaruutu -->
	<div id="rasti3_4" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Tarinaruutu</h2>
		</div>
		<div class="modal-body">
			<p>Metsän taloudellinen hyödyntäminen ja luonnon suojelu voivat parhaillaan toimia toisiaan tukevina metsänkätyyömuotoina. Kettulassa kulkee kuusien ja mäntyjen lomassa kunnan hiihtoreitti. Miten muuten metsää voisi hyödyntää? Lähde ottamaan selvää.</p>
		</div>
		<div class="modal-footer">
			<button id="rasti3_4btn" class="btn btn-primary">Näytä seuraava rasti</button>
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
		</div>
		<div class="modal-footer">
			<button id="rasti4_1btn" class="btn btn-primary">Miten ympäristöä voitaisiin hyödyntää</button>
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
	
	<!-- KARTTA -->
	<div id="kartta" class="rasti modal">
		<div class="modal-header">
			<button type="button" class="close">&times;</button>
			<h2>Seuraavan rastin sijainti</h2>
		</div>
		<div class="modal-body">
			<img src="img/kartta.jpg" alt="Kartta" class="img-polaroid">
		</div>
		<div class="modal-footer">
			<p>Kulje seuraavalle rastille 
				<button id="kartta1_btn" class="btn btn-primary">1</button> 
				<button id="kartta2_btn" class="btn btn-primary">2</button> 
				<button id="kartta3_btn" class="btn btn-primary">3</button> 
				<button id="kartta4_btn" class="btn btn-primary">4</button> 
			</p>
		</div>
	</div>
	<!-- /KARTTA -->
	
	<script src="jquery.js"></script>
	<script src="js/gps.js"></script>
	<script>
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

		rasti4_1div = $("#rasti4_1"),
		rasti4_2div = $("#rasti4_2"),
		rasti4_3div = $("#rasti4_3"),

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
			if(id !== "rasti2_4btn2")
				rastidivit.hide();
			
			switch(id)
			{
				// RASTI 0
				case "rasti0_btn":
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
				case "rasti1_3btn1":
				case "rasti1_3btn2":
				case "rasti1_3btn3":
				case "rasti1_3btn4":
					rasti1_4div.show();
				break;
				case "rasti1_4btn":
					kartta_div.show();
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
					kartta_div.show();
				break;
				// RASTI 3
				case "rasti3_1btn":
					rasti3_2div.show();
				break;
				case "rasti3_1btn2":
					rasti3_4div.show();
				break;
				case "rasti3_2btn":
					rasti3_3div.show();
				break;
				case "rasti3_2btn2":
					rasti3_1div.show();
				break;
				case "rasti3_3btn":
					rasti3_2div.show();
				break;
				case "rasti3_4btn":
					kartta_div.show();
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
				// (Fix selection)
				case "rasti4_3btn0":
				case "rasti4_3btn1":
				case "rasti4_3btn2":
					kartta_div.show();
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
				default:
					alert("Not implemented yet exception");
				break;
			}
		});

	// var rasti1btns1 = $("#r1b1 button.btn").on("click", function()
	// 	{
	// 		rasti1btns1.removeClass("btn-info");
	// 		$(this).addClass("btn-info");
	// 	});

	// var rasti1btns2 = $("#r1b2 button.btn").on("click", function()
	// 	{
	// 		rasti1btns2.removeClass("btn-info");
	// 		$(this).addClass("btn-info");
	// 	});
	// var rasti1btns3 = $("#r1b3 button.btn").on("click", function()
	// 	{
	// 		rasti1btns3.removeClass("btn-info");
	// 		$(this).addClass("btn-info");
	// 	});
	// var rasti1btns4 = $("#r1b4 button.btn").on("click", function()
	// 	{
	// 		rasti1btns4.removeClass("btn-info");
	// 		$(this).addClass("btn-info");
	// 	});

	function calculateTreeValue()
	{
		var pituus    = $("#rasti2_4input1").val(),
			lapimitta = $("#rasti2_4input2").val(),
			tilavuus  = $("#rasti2_4input3"),
			arvo      = $("#rasti2_4input4"),
			r;

		pituus = parseInt(pituus);
		lapimitta = parseInt(lapimitta);
		if(!Number(pituus)) { alert("Virheellinen arvo pituudella"); return;}
		if(!Number(lapimitta)) { alert("Virheellinen arvo läpimitalla"); return;}

		r = lapimitta / 2;
		volume = Math.PI * Math.pow(r, 2) * pituus;
		value = 0.05 * volume;
		volume = Math.round(volume);
		value = Math.round(value);
		tilavuus.val(volume);
		arvo.val(value);
	}
	
	</script>
</body>
</html>