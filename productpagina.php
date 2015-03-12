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
                <?php $product = returnProduct(dbConnected(),$_GET['id']) ?>

                <div><h2>  <?php echo $product['PRODUCTNAAM']; ?></h2></div>
                <div id="foto"><img src="<?php echo $product['AFBEELDING_GROOT']; ?>" alt="calvin-pantalon"></div>
                <div id="beschrijving">
                    <p>
                        <?php echo $product['OMSCHRIJVING']; ?>
                    </p>
                    <div id="prijs">
                        <h3>  &euro; <?php echo $product['PRIJS']; ?>  </h3>
                    </div>
                    <div id="toevoegen"><a href="winkelwagen.php">Toevoegen aan winkelwagen </a></div>
                </div>

            </div>
            <h2> Zie ook </h2>
            <?php getGerelateerdeProduct(dbConnected(),$_GET['id']); ?>
        </div>
    </div>
    <?php include 'includes/ads.php'; ?>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>