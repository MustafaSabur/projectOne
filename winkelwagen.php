<!DOCTYPE HTML>

<html lang="nl">

<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Nieuws pagina (homepagina)" >
	<meta name="keywords" content="cynful, clothing, kleding, webshop, acties" >
	<title>Cynful Clothing</title>
	
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/afrekenen.css">

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
				<h1>WINKELWAGEN</h1>
				<div class="buttons"><a href="productlijst.php">Verder winkelen</a></div>
				<table id="winkelwagen">
				  <tr>
				    <th></th>
				    <th>Productnaam</th> 
				    <th>Prijs</th>
				    <th>Aantal</th> 
				    <th>Subtotaal</th>
				    <th>Verwijderen</th>
				  </tr>
				  <tr>
				    <td><img src="images/calvin-pantalon.jpg" alt="calvin-pantalon"></td>
				    <td>FITTED PANTALON ANTRACIET</td> 
				    <td>€ 189,00</td>
				    <td><input type="number" value="2" style="width:30px"></td>
				    <td>€ 378,00</td>
				    <td><a href="#"><img src="images/delete-icon.png" alt="delete-icon"></a></td>
				  </tr>
				   <tr>
				    <td><img src="images/calvin-overhemd.jpg" alt="calvin-overhemd"></td>
				    <td>EXTRA SLIM FIT OVERHEMD</td> 
				    <td>€ 89,00</td>
				    <td><input type="number" value="1" style="width:30px"></td>
				    <td>€ 89,00</td>
				    <td><a href="#"><img src="images/delete-icon.png" alt="delete-icon"></a></td>
				  </tr>
				</table>
				<div class="buttons">
					<a href="#">Herbereken bedrag</a>
					<label>Eindtotaal:</label>
					<label>€ 467,00</label>
				</div>
				<div class="buttons"><a href="afrekenen.php">Afrekenen</a></div>
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>