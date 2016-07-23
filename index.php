<?php
if(isset($_GET['ref'])){
	if($_GET['ref'] == 'mobile'){
		echo '<script>top.location="https://mtes01.herokuapp.com/"</script>';
	}
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="" lang="tr">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#e31d1a">
<title>Size En Yakın MİM</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="site.css?v=134d308d0f29f38fd804e7882b2f7317" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
</head>

<body>
<div id="container">
  <div id="en-yakin"></div>
  <div id="destek"></div>
  <div id="il-ilce-container">
    <div id="il-ilce-border">
      <table width="95%" border="0" cellspacing="0" cellpadding="3" class="m-10">
        <tr>
          <td><span class="lbl-il-ilce">İl</span></td>
          <td width="50%"><select id="il" name="il" class="select">
              <option value="-1">Seçiniz</option>
              <option value="35">İZMİR</option>
              <option value="45">MANİSA</option>
              <option value="9">AYDIN</option>
              <option value="20">DENİZLİ</option>
              <option value="48">MUĞLA</option>
            </select></td>
          <td><span class="lbl-il-ilce">İlçe</span></td>
          <td width="50%"><select id="ilce" name="ilce" class="select" disabled>
              <option value="-1">İl Seçiniz</option>
            </select></td>
        </tr>
      </table>
    </div>
  </div>
  <div id="harita-container">
    <div id="harita"><div id="aGFyaXRh"></div></div>
  </div>
  <div id="aydem"></div>
</div>
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
<script src="js/il_ilce.js"></script> 
<script type="text/javascript" src="js/1q2w3e.min.js?v=134d308d0f29f38fd804e7882b2f7314"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLa4qA1ELbFMs2GN7FzAzdpT2QdPG38ds&libraries=places&callback=ce67963a2365be285f341a1f9dea36ea" async defer></script>
</body>
</html>