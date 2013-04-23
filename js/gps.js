var hasLocation = false;
var longitudediv = jQuery('#longitude');
var lattitudediv = jQuery('#lattitude');
var rastidiv = jQuery('#rasti');

var paloportaatLat = 61.492435,
	paloportaatLong = 23.781143,
	paloportaatDist = 100,
	rasti2Lat = 61.492317,
	rasti2Lon = 23.779255,
	rasti2Dist = 100;

var wpid,
	symbolid = 0,
	symbols = ['-', '\\', '|', '/'];

var latitude, longitude;
var positionDiv = $("#positionDiv");

if(navigator.geolocation)
{
	//navigator.geolocation.getCurrentPosition(exportPosition, errorPosition);
	wpid=navigator.geolocation.watchPosition(exportPosition, errorPosition, {enableHighAccuracy:true, maximumAge:500, timeout:27000});
}
else
{
	alert("Browser does not support geolocation");
}

function errorPosition()
{
	alert("Could not find position");
}

function exportPosition(position)
{
	testPosition(position.coords.latitude, position.coords.longitude);
	var pos = new google.maps.LatLng(position.coords.latitude, 
		position.coords.longitude);

	map.setCenter(pos);
	marker.position = pos;
}

function testPosition(lat, lon)
{
	symbolid = ++symbolid % symbols.length;
	paloportaatDist = haversine(lat, lon, paloportaatLat, paloportaatLong);
	rasti2Dist = haversine(lat, lon, rasti2Lat, rasti2Lon);
	positionDiv.html("Position: " + lat + ", " + lon + "<br>Paloportaat: " + paloportaatDist + "<br>rasti2: " + rasti2Dist + "<br>" + symbols[symbolid]);
	var sphere = 5; //Metriä kohteesta

	if(paloportaatDist <= sphere)
	{
		//alert("AUTOLLA");
		rastidiv.html("Saavuit rastille paloportaat");
		rastidivit.hide();
		rasti1_1div.show();
	}
	else if(rasti2Dist <= sphere)
	{
		rastidiv.html("Saavuit rastille rasti2");
	}
	else
	{
		rastidiv.html("EI RASTILLA");
	}
}

//Declare toRad method
if (typeof(Number.prototype.toRad) === "undefined") {
	Number.prototype.toRad = function() {
		return this * Math.PI / 180;
	}
}
//Declare toDeg method
if (typeof(Number.prototype.toDeg) === "undefined") {
	Number.prototype.toDeg = function() {
		return this * 180 / Math.PI;
	}
}

// Haversine distance calculation
// @Params Position1, Position2
// @Return distance in meters
function haversine(lat1, lon1, lat2, lon2)
{
	var R = 6371000; //Earths mean radius in m
	var dLat = (lat2-lat1).toRad(); //Delta lat
	var dLon = (lon2-lon1).toRad(); //Delta lon
	var lat1r = lat1.toRad();
	var lat2r = lat2.toRad();
	var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
			Math.sin(dLon / 2) * Math.sin(dLon / 2) *
			Math.cos(lat1r) * Math.cos(lat2r);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
	var d = R * c;
	return d;
}

// Calculates initial bearing between 2 GPS points
// @Params Position1, Position2
// @Return bearing in Degrees
function bearing(lat1, lon1, lat2, lon2)
{
	lat1 = lat1.toRad();
	lat2 = lat2.toRad();
	var dLon = (lon2 - lon1).toRad();

	var y = Math.sin(dLon) * Math.cos(lat2);
	var x = Math.cos(lat1) * Math.sin(lat2) -
			Math.sin(lat1) * Math.cos(lat2) * Math.cos(dLon);
	var brng = Math.atan2(y, x);

	return (brng.toDeg()+360) % 360;
}