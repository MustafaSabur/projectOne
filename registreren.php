<!DOCTYPE HTML>

<html lang="nl">

<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Nieuws pagina (homepagina)" >
	<meta name="keywords" content="cynful, clothing, kleding, webshop, acties" >
	<title>Cynful Clothing</title>
	
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/registreren.css">

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
				<h1>REGISTREREN</h1>
				<div class="errors">
				<?php include 'includes/createaccount.php' ?>
				</div>
				 
				<form class="registreren" method="post" action="<?= $_SERVER['SCRIPT_NAME']?>">
					<fieldset class="row1">
		                <legend>Account Gegevens</legend>
		                <p>
		                    <label>Gebruikersnaam *</label>
		                    <input type="text" name="username" value="<?= $username_test;?>"/>
		                </p>
		                <p>
		                    <label>Herhaal Gebruikersnaam *</label>
		                    <input type="text" name="username2" />
		                </p>
		                <p>
		                    <label>Wachtwoord*</label>
		                    <input type="password" name="password" />
		                </p>
		                <p>
		                    <label>Herhaal Wachtwoord*</label>
		                    <input type="password" name="password2" />
		                </p>
	            	</fieldset>
	            	<fieldset class="row2">
		                <legend>Factuuradres</legend>
		                <p>
		                    <label>Voornaam *</label>
		                    <input type="text" name="firstname" class="long" value="<?= $firstname_test;?>" />
		                </p>
		                <p>
		                    <label>Tussenv.</label>
		                    <input type="text" name="prefix" class="long" value="<?= $prefix_test;?>"/>
		                </p>
		                <p>
		                    <label>Achternaam *</label>
		                    <input type="text" name="lastname" class="long" value="<?= $lastname_test;?>"/>
		                </p>
		                <p>
		                    <label>Emailadres *</label>
		                    <input type="email" name="email" class="long" value="<?= $email_test;?>"/>
		                </p>
		                <p>
		                    <label>Straatnaam *</label>
		                    <input type="text" name="street" class="long" value="<?= $street_test;?>"/>
		                </p>
		                <p>
		                    <label>Huisnummer *</label>
		                    <input type="text" name="streetnumber" class="long" value="<?= $streetnumber_test;?>"/>
		                </p>
		                <p>
		                    <label>Postcode *</label>
		                    <input type="text" name="postalcode" class="long" value="<?= $postalcode_test;?>"/>
		                </p>
		                <p>
		                    <label>Plaatsnaam *</label>
		                    <input type="text" name="city" class="long" value="<?= $city_test;?>"/>
		                </p>
		                <p>
		                    <label>Geslacht *</label>
		                    <input type="radio" name="gender" class="radio" value="M" checked="checked" />
		                    <label class="gender">Man</label>
		                    <input type="radio" name="gender" class="radio" value="V"/>
		                    <label class="gender">Vrouw</label>
		                </p>
		                <p>
		                    <label>Geboortedatum *</label>
		                    <select class="date">
		                        <option value="1">01 </option>
		                        <option value="2">02</option>
		                        <option value="3">03</option>
		                        <option value="4">04</option>
		                        <option value="5">05</option>
		                        <option value="6">06</option>
		                        <option value="7">07</option>
		                        <option value="8">08</option>
		                        <option value="9">09</option>
		                        <option value="10">10</option>
		                        <option value="11">11</option>
		                        <option value="12">12</option>
		                        <option value="13">13</option>
		                        <option value="14">14</option>
		                        <option value="15">15</option>
		                        <option value="16">16</option>
		                        <option value="17">17</option>
		                        <option value="18">18</option>
		                        <option value="19">19</option>
		                        <option value="20">20</option>
		                        <option value="21">21</option>
		                        <option value="22">22</option>
		                        <option value="23">23</option>
		                        <option value="24">24</option>
		                        <option value="25">25</option>
		                        <option value="26">26</option>
		                        <option value="27">27</option>
		                        <option value="28">28</option>
		                        <option value="29">29</option>
		                        <option value="30">30</option>
		                        <option value="31">31</option>
		                    </select>
		                    <select>
		                        <option value="1">Januari</option>
		                        <option value="2">Februari</option>
		                        <option value="3">Maart</option>
		                        <option value="4">April</option>
		                        <option value="5">Mei</option>
		                        <option value="6">Juni</option>
		                        <option value="7">Juli</option>
		                        <option value="8">Augustus</option>
		                        <option value="9">September</option>
		                        <option value="10">October</option>
		                        <option value="11">November</option>
		                        <option value="12">December</option>
		                    </select>
		                    <input class="jaar" type="number"  placeholder="Jaar">
		                </p>
		            </fieldset>
		            <fieldset class="row3">
		                <legend>Voorwaarden</legend>
		                <p class="agreement">
		                    <input type="checkbox" class="checkbox" name="acptterms" value="Yes"/>
		                    <label>* Ik accepteer de <a href="#">Voorwaarden</a>.</label>
		                </p>
		                <p class="agreement">
		                    <input type="checkbox" class="checkbox" value=""/>
		                    <label>Ik wil graag aanbiedingen per mail ontvangen.</label>
		                </p>
		            </fieldset>
	            	
	            	<input type="submit" name="submit" value="Registreren" class="button"/>
        		</form>
			</div>
		</div>
		<?php include 'includes/ads.php'; ?>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>