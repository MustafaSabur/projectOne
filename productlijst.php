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
        $search = false;
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
						<p>
                            <form action ="productlijst.php" method="get">
                                <input type="text" placeholder="Zoektermen ingeven" name = "zoekTerm">
                                <input  type="submit" value="Zoeken">
                            </form>
                        </p>
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

                            <div class="catogorie"><a href="productlijst.php&#63;merk=Calvin Klein">Calvin Klein</a></div>
                            <div class="catogorie"><a href="productlijst.php&#63;merk=Ralph Lauren">Ralph Lauren</a></div>
                            <div class="catogorie"><a href="productlijst.php&#63;merk=Hugo Boss">Hugo Boss</a></div>

					</div>

                    <?php if (empty($_GET['zoekTerm']) && empty($_GET['merk'])){
                        printProductenPagina(dbConnected());
                    }
                    elseif(isset($_GET['merk'])){
                        printMerken(dbConnected(), $_GET['merk']);
                    }
                    else {
                        zoekProducten(dbConnected(), $_GET['zoekTerm']);
                    } ?>
					
				</div>
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>