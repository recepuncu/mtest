<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
<script>
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
</script>	
	
    <script>
      
      var map;
      var infowindow;

      function initMap() {
        var pyrmont = {lat: 38.423734, lng: 27.142826};

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 13
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.textSearch({
          location: pyrmont,
          radius: 500,
          query: 'Gediz Elektrik'
        }, callback);		
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
        	console.log(place);
        	console.log(place.formatted_phone_number);
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
	
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLa4qA1ELbFMs2GN7FzAzdpT2QdPG38ds&libraries=places&callback=initMap" async defer></script>
	
  </body>
</html>
