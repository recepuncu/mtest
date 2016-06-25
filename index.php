<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Gediz Elektrik MİM">
<meta name="keywords" content="Gediz Elektrik, MİM, harita, map">
<meta name="author" content="Recep Uncu">
<title>Gediz Elektrik MİM - Google Maps</title>
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
</script>
<script type="text/javascript" src="js/1q2w3e.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLa4qA1ELbFMs2GN7FzAzdpT2QdPG38ds&libraries=places&callback=initMap" async defer></script>
</body>
</html>