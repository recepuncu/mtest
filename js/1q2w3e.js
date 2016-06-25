var aGFyaXRh;
var aWxrX2tvbnVt;
var infowindow;
var placesService;	

function im() {
	$(function(){
		aWxrX2tvbnVt = {lat: 38.423734, lng: 27.142826};
		
		aGFyaXRh = new google.maps.Map($('#aGFyaXRh')[0], {
			center: aWxrX2tvbnVt,
			zoom: 13
		});
		
		infowindow = new google.maps.InfoWindow();
		placesService = new google.maps.places.PlacesService(aGFyaXRh);
		
		placesService.textSearch({
			location: aWxrX2tvbnVt,
			radius: 500,
			query: 'Gediz Elektrik'
		}, placesServiceCallback);		
	});	
}//im

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
			if(typeof place.name !== 'undefined')
				_content += place.name +'<br/>';
			if(typeof place.formatted_address !== 'undefined')
				_content += place.formatted_address +'<br/>';
			if(typeof place.formatted_phone_number !== 'undefined')
				_content += place.formatted_phone_number +'<br/>';												
			infowindow.setContent(_content);
			infowindow.open(aGFyaXRh, marker);				
		}
	});	  
}//getPlacesDetails

function createPlaceMarker(place) {
	var placeLoc = place.geometry.location;
	var marker = new google.maps.Marker({
		map: aGFyaXRh,
		position: place.geometry.location,
		title: place.name,
		icon: 'https://mtes01.herokuapp.com/img/logo-gediz.png'
	});
	
	google.maps.event.addListener(marker, 'click', function() {
		getPlacesDetails(place, this);
	});
}//createMarker