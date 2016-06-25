<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GoogleMapsApi</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<style type="text/css">
html, body {
	height: 100%;
	margin: 0;
	padding: 0;
}
#harita {
	height: 100%;
}
</style>
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
</head>

<body>

<div id="harita"></div>

<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({
		appId      : '1044549635583804',
		xfbml      : true,
		version    : 'v2.6'
	});
};	
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	
var harita;
var ilk_konum;
var infowindow;
var placesService;	

function initMap() {
	$(function(){
		ilk_konum = {lat: 38.423734, lng: 27.142826};
		
		harita = new google.maps.Map($('#harita')[0], {
			center: ilk_konum,
			zoom: 13
		});
		
		infowindow = new google.maps.InfoWindow();
		placesService = new google.maps.places.PlacesService(harita);
		
		placesService.textSearch({
			location: ilk_konum,
			radius: 500,
			query: 'Gediz Elektrik'
		}, placesServiceCallback);		
	});	
}//initMap

function placesServiceCallback(results, status) {
	if (status === google.maps.places.PlacesServiceStatus.OK) {
		for (var i = 0; i < results.length; i++) {
			createPlaceMarker(results[i]);
		}
	}
}//placesServiceCallback

function getPlacesDetails(place, marker){
	placesService.getDetails({ reference: place.reference }, function(place, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {			
			var _content = '';
			if(typeof place.formatted_address !== 'undefined')
				_content += place.formatted_address +'<br/>';
			if(typeof place.formatted_phone_number !== 'undefined')
				_content += place.formatted_phone_number +'<br/>';												
			infowindow.setContent(_content);
			infowindow.open(harita, marker);				
		}
	});	  
}//getPlacesDetails

function createPlaceMarker(place) {
	var placeLoc = place.geometry.location;
	var marker = new google.maps.Marker({
		map: harita,
		position: place.geometry.location,
		title: place.name,
		icon: 'https://mtes01.herokuapp.com/img/logo-gediz.png'
	});
	
	google.maps.event.addListener(marker, 'click', function() {
		getPlacesDetails(place, this);
	});
}//createMarker

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLa4qA1ELbFMs2GN7FzAzdpT2QdPG38ds&libraries=places&callback=initMap" async defer></script>
</body>
</html>