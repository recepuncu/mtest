<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#e31d1a">
<title>Size En Yakın MİM</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="site.min.css?v=8b5d6e7aca86c9e1f9617946e7478a89"/>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
</head>

<body>

<div id="en-yakin">&nbsp;</div>


<div id="sizin-icin">&nbsp;</div>


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


<div id="bulunan-adresler">
  <ul>
    <li><span>Doğanlar Mah.</span></li>
    <li><span>Mevlana Mah.</span></li>
  </ul>
</div>

<div id="detay-cerceve">
    <h2>Aydem (Gediz Elektrik MİM)</h2>
    <p id="info-adres">Detaylı Adres Detaylı Adres Detaylı Adres Detaylı Adres Detaylı Adres</p>
    <table width="100%">
        <tr>
            <td width="50%"><span id="info-telefon">000</span></td>
            <td width="50%" align="right">www.aydem.com</td>
        </tr>
    </table>
</div>


<div id="harita-cerceve">
  <div id="harita-tasiyici">
    <div id="map"><div id="aGFyaXRh"></div></div>
  </div>
</div>

<div id="aydem">&nbsp;</div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1652715035045481',
      xfbml      : true,
      version    : 'v2.7'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
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
<script type="text/javascript" src="js/1q2w3e.min.js?v=8b5d6e7aca86c9e1f9617946e7478a89"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLa4qA1ELbFMs2GN7FzAzdpT2QdPG38ds&libraries=places&callback=ce67963a2365be285f341a1f9dea36ea" async defer></script>


</body>
</html>