<!DOCTYPE HTML>

<html lang="nl">

<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Nieuws pagina (homepagina)" >
	<meta name="keywords" content="cynful, clothing, kleding, webshop, acties" >
	<title>Cynful Clothing</title>
	
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	
	<script
	src="http://maps.googleapis.com/maps/api/js">
	</script>
	
	<script>
	var myCenter=new google.maps.LatLng(52.522952,5.440695);
	var marker;
	
	function initialize() {
	  var mapProp = {
	    center:myCenter,
	    zoom:12,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
	  
	  var marker=new google.maps.Marker({
	    position:myCenter,
		animation:google.maps.Animation.BOUNCE
	    });

	  marker.setMap(map);
	  
	  
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<?php 
		require 'includes/core.php';
		include 'includes/functions.php';
	?>
</head>

<body>
	<div id="container">
		<div id="main">
			<?php include 'includes/header.php'; include 'includes/menu.php'; ?>
			<div id="content">
				<h1>OVER ONS</h1>
				<h2>Dressing you Since 1903</h2>
				<img src="images/about_us.jpg" alt="about_us">
				
				<p>
					Het concept van The Cloakroom is een vernieuwende manier voor mannen om hun garderobe te updaten zonder van hun bank op te hoeven staan! Nadat je de stijltest hebt gedaan neemt een van onze personal shoppers contact op om jouw wensen door te spreken. Vervolgens stelt ze een box samen met outfits afgestemd op jouw voorkeuren. Je betaalt niets voor de service of de verzending en we rekenen de normale retailprijzen. Je ontvangt pas een factuur zodra we weten welke artikelen je 	hebt besloten te houden. Iedereen is van harte welkom in onze showroom in het centrum van Amsterdam om tijdens een persoonlijke stijlsessie van een goed glas whisky te genieten. 
				</p>
				<img src="images/about_us2.jpg" alt="about_us">
				<h2>Routebeschrijving</h2>
				<h3>Met de auto</h3>
				<p>
					Neem op de A6 afslag Lelystad Noord en volg vervolgens de borden Batavia Stad.
					Jouw route van deur tot deur? Kijk op maps.google.nl
					(Let op: volg in Lelystad de borden naar Batavia Stad, veel navigatiesystemen komen uit op een verkeerde locatie.)
				</p>
				<h3>Met openbaar vervoer</h3>
				<p>
					Neem de trein naar NS Station Lelystad. Vanaf het station neem je buslijn 3 of 7 rechtstreeks naar Batavia Stad.
					Jouw OV route van deur tot deur? Kijk op 9292.nl
				</p>
				<h3>Met de boot</h3>
				<p>
					In Bataviahaven, 2 minuten lopen vanaf Batavia Stad, liggen de aanlegsteigers aan het Markermeer.
					Meer informatie over Bataviahaven? Kijk op bataviahaven.nu
				</p>
				<h3>Adres</h3>
				
				<p>
					Batavia Stad Fashion Outlet <br>
					Bataviaplein 60<br>
					8242 PN Lelystad
				</p>
				
				<div id="googleMap"></div>
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
	<?php include 'includes/footer.php';?>
</body>
</html>