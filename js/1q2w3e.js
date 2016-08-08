var aGFyaXRh; //harita
var aWxrX2tvbnVt; //varsayılan lokasyon long-lat
var infowindow; //marker tıklandığında açılan
var placesService; //google places servisi

function showCustomInfo(adres, telefon){
	$('#info-adres', '#detay-cerceve').html(adres);
	$('#info-telefon', '#detay-cerceve').html(telefon);
	$('#detay-cerceve').show();
}

function ce67963a2365be285f341a1f9dea36ea() { //initMap
	$(function(){
		aWxrX2tvbnVt = {lat: 38.423734, lng: 27.142826};
		
		$('#ilce').on('change', function() {
			if(this.value > 0){
				var lat = $('option:selected', this).data('lat');
				var lng = $('option:selected', this).data('lng');
				aWxrX2tvbnVt = {lat: lat, lng: lng};
				bG9hZE1hcA();
				setTimeout(function(){
					$('#bulunan-adresler').slideDown();
				}, 1000);
			}else{
				$('#bulunan-adresler').hide();
			}
		});
		
		$(document).on('click', '#bulunan-adresler ul li', function(){
			if($(this).data('reference') != ''){
				var place = { 
					reference: $(this).data('reference')
				}
				getPlacesDetails(place, '');	
			}			
		});
		
		if(navigator.geolocation) {
			//https adresinden girilmediğinde konum alınmaz
			//Only secure origins are allowed"
			navigator.geolocation.getCurrentPosition(function(position) {				
				aWxrX2tvbnVt = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
				bG9hZE1hcA();
			}, function() {
				//handleNoGeolocation(browserSupportFlag);
			},
			{
				enableHighAccuracy: false,
				timeout: 30000,
				maximumAge: 0
			});
		}		
		bG9hZE1hcA();
		
	});	
}//ce67963a2365be285f341a1f9dea36ea

function bG9hZE1hcA(){
		$(function(){
			aGFyaXRh = new google.maps.Map($('#aGFyaXRh')[0], {
				center: aWxrX2tvbnVt,
				zoom: 12
			});

			infowindow = new google.maps.InfoWindow();
			placesService = new google.maps.places.PlacesService(aGFyaXRh);
			
			var search_words_index = $('#il option:selected').val();
			var search_word = search_words[search_words_index];
			if(($('#ilce option:selected').text() != 'İl Seçiniz')
				&&($('#ilce option:selected').text() != 'Seçiniz')){
				search_word += ' ' + $('#ilce option:selected').text();
			}			

			placesService.textSearch({
				location: aWxrX2tvbnVt,
				radius: '500',
				query: search_word
			}, placesServiceCallback);			
		});
} //loadMap

function placesServiceCallback(results, status) {
	if (status === google.maps.places.PlacesServiceStatus.OK) {
		$('ul', '#bulunan-adresler').empty();
		for (var i = 0; i < results.length; i++) {
			createPlaceMarker(results[i]);			
			if(i < 3)
				$('ul','#bulunan-adresler').append('<li data-reference="' + results[i].reference + '"><span>' + results[i].formatted_address + '</span></li>');			
		}		
	}
}//placesServiceCallback

function getPlacesDetails(place, marker){
	placesService.getDetails({ reference: place.reference }, function(place, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {			
			
			var adres = 'Adres Bulunamadı.';
			var telefon = 'Telefon Bulunamadı.';
			var _content = '';
			if(typeof place.name !== 'undefined')
				_content += place.name +'<br/>';
			if(typeof place.formatted_address !== 'undefined'){
				_content += place.formatted_address +'<br/>';
				adres = place.formatted_address;
			}
			if(typeof place.formatted_phone_number !== 'undefined'){
				_content += place.formatted_phone_number +'<br/>';
				telefon = place.formatted_phone_number;
			}
				
			if('photos' in place){
				var  photo_src = place.photos[0].getUrl({'maxWidth': 150, 'maxHeight': 100});
				_content += '<br/><img src="'+photo_src+'" alt="'+place.name+'" width="150" height="100"><br/>';
			}
										
			infowindow.setContent(_content);
			//infowindow.open(aGFyaXRh, marker);
			showCustomInfo(adres, telefon);			
		}
	});	  
}//getPlacesDetails

function createPlaceMarker(place) {

	var placeLoc = place.geometry.location;
	
	var markerOpts = {};
	markerOpts.map = aGFyaXRh;
	markerOpts.position = place.geometry.location;
	markerOpts.title = place.name;
	if(place.name.indexOf('Gediz') !== -1){
		markerOpts.icon = 'https://goo.gl/LOIJRc';
	}	
	
	var marker = new google.maps.Marker(markerOpts);
	
	google.maps.event.addListener(marker, 'click', function() {
		getPlacesDetails(place, this);
	});
}//createMarker