<!DOCTYPE HTML>

<html lang="nl">

<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Nieuws pagina (homepagina)" >
	<meta name="keywords" content="cynful, clothing, kleding, webshop, acties" >
	<title>Cynful Clothing</title>
	
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">

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
				<h1>Winkel</h1>
				<div id="terug"><a href="productlijst.php"> Terug</a></div>
				<div id="overzicht">
					<div><h2>FITTED PANTALON ANTRACIET</h2></div>
					<div id="foto"><img src="images/calvin-pantalon.jpg" alt="calvin-pantalon"></div>
					<div id="beschrijving">
						<p>
							Deze fitted pantalon van Calvin Klein is gemaakt van een hoogwaardige katoenblend. Het slank gesneden model is uitgevoerd in een stijlvolle antracietkleur met een zeer subtiele glans. Verder is de broek voorzien van een ritssluiting met een blinde sluiting, twee steekzakken aan de voorzijde en twee paspelzakken met een knoop aan de achterzijde.
						</p>
						<div id="toevoegen"><a href="winkelwagen.php">Toevoegen aan winkelwagen </a></div>
					</div>
				</div>
				
				<h2> Zie ook </h2>
				<div class="product">
					<h3>Calvin Klein</h3>
					<a href="calvin-pantalon.php"><img src="images/calvin-pantalon.jpg" alt="calvin-pantalon"></a>
					<p>Fitted pantalon antraciet</p>
					<p><span> € 189,00 </span> <button type="button" >In Winkelwagen</button></p>
				</div>
				<div class="product">
					<h3>Calvin Klein</h3>
					<a href="#"><img src="images/calvin-bomberjack.jpg" alt="calvin-bomberjack"></a>
					<p>Donkerblauw bomberjack</p>
					<p><span> € 349,00 </span> <button type="button" >In Winkelwagen</button></p>
				</div>
				<div class="product">
					<h3>Calvin Klein</h3>
					<a href="#"><img src="images/calvin-overhemd.jpg" alt="calvin-overhemd"></a>
					<p>Extra slim fit overhemd</p>
					<p><span> € 89,00 </span> <button type="button" >In Winkelwagen</button></p>
				</div>								
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>