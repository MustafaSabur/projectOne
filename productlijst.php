<!DOCTYPE HTML>

<html lang="nl">

<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Nieuws pagina (homepagina)" >
	<meta name="keywords" content="cynful, clothing, kleding, webshop, acties" >
	<title>Cynful Clothing</title>
	
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/productlijst.css">

	<?php 
		require 'includes/core.php';
		include 'includes/functions.php';
	?>
</head>

<body>
	<div id="container">
		<div id="main">
			<?php include 'includes/header.php';include 'includes/menu.php'; ?>
			<div id="content">
				<h1>WINKEL</h1>
				<div id="productlijst">
					<div class="zoekfunctie">
						<p><input type="text" placeholder="Zoektermen ingeven">
						<input type="button" value="Zoeken"></p>
					</div>
					<div class="nPerPagina">
						<p>1367 Producten | Toon
							<select>
								<option>5</option>
								<option>10</option>
								<option>20</option>
								<option>40</option>
							</select>
							 per pagina.
						</p>
					</div>
					<div id="merkmenu">
						<div class="catogorie"><a href="#">Calvin Klein</a></div>
						<div class="catogorie"><a href="#">Ralph Lauren</a></div>
						<div class="catogorie"><a href="#">Hugo Boss</a></div>
					</div>
					<?php  printProductenPagina(dbConnected()); ?>
					
				</div>
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>