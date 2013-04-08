var hasLocation = false;
	var button = jQuery('#showlocbutton');
	var longitudediv = jQuery('#longitude');
	var lattitudediv = jQuery('#lattitude');
	var rastidiv = jQuery('#rasti');
	var timediv = jQuery("#time");

	var Range = 0.00017093639066340013;

	var paloportaatLat = 61.492744277870635,
		paloportaatLong = 23.778526306152344,
		paloportaatDist = 100;

	var pinniaLat = 61.492727793281354,
		pinniaLon = 23.778888702392578,
		pinniaDist = 100;

	var amfiLat = 61.492874006374144,
		amfiLon = 23.778223750931758,
		amfiDist = 100;

	var wpid,
		symbolid = 0,
		symbols = ['-', '\\', '|', '/'];

	var latitude, longitude;
	var positionDiv = $("#positionDiv");

	button.on("click", function(e)
		{
			e.preventDefault();
			console.log("Button");
			navigator.geolocation.getCurrentPosition(exportPosition, errorPosition, {enableHighAccuracy:true, maximumAge:500, timeout:27000});
		});

	
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
			var start = new Date().getMilliseconds();
			testPosition(position.coords.latitude, position.coords.longitude);
			var stop = new Date().getMilliseconds();
			var executionTime = stop - start;
			timediv.html("Excecution time was: " + executionTime + " milliseconds");
		}

		function testPosition(lat, lon)
		{
			symbolid = ++symbolid % symbols.length;
			paloportaatDist = haversine(lat, lon, paloportaatLat, paloportaatLong);
			pinniaDist = haversine(lat, lon, pinniaLat, pinniaLon);
			amfiDist = haversine(lat, lon, amfiLat, amfiLon);
			var paloportaatBearing = bearing(lat, lon, paloportaatLat, paloportaatLong);
			bearingDiv.css({ WebkitTransform: 'rotate(' + Math.round(paloportaatBearing) + 'deg)'});
			bearingDiv.css({ '-moz-transform': 'rotate(' + Math.round(paloportaatBearing) + 'deg)'});
			positionDiv.html("Position: " + lat + ", " + lon + "<br>Paloportaat: " + paloportaatDist + ", bearing: " + paloportaatBearing + "<br>Pinni A: " + pinniaDist + "<br>Amfin portaat: " + amfiDist + "<br>" + symbols[symbolid]);
			var sphere = 5; //Metriä kohteesta

			if(paloportaatDist <= sphere)
			{
				rastidiv.html("Saavuit rastille paloportaat");
				rastidivit.hide();
				rasti1_1div.show();
			}
			else if(pinniaDist <= sphere)
			{
				rastidiv.html("Saavuit rastille pinni a");
			}
			else if(amfiDist <= sphere)
			{
				rastidiv.html("Saavuit rastille amfin portaat");
				rastidivit.hide();
				rasti2_1div.show();
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