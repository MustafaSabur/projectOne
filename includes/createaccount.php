
<?php

//Alle variablen leegmaken
$username = $password = $firstname = $lastname = $prefix = $street = $streetnumber = $postalcode = $city = $email = $gender = "";
$username_test = $username_test2 = $password_test = $password_test2 = $firstname_test = $prefix_test = $lastname_test = $street_test = $streetnumber_test = $postalcode_test = $city_test = $email_test = $gender_test = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	
	//Ingevoerde post in variablen stoppen om vervolgens te testen op validatie.
	$username_test = $_POST['username'];
	$username_test2 = $_POST['username2'];
	$password_test = $_POST['password'];
	$password_test2 = $_POST['password2'];
	$firstname_test = $_POST['firstname'];
	$prefix_test = $_POST['prefix'];
	$lastname_test = $_POST['lastname'];
	$street_test = $_POST['street'];
	$streetnumber_test = $_POST['streetnumber'];
	$postalcode_test = $_POST['postalcode'];
	$city_test = $_POST['city'];
	$email_test = $_POST['email'];
	$gender_test = $_POST['gender'];


	//Fout string
	$error = '<strong>Fout: </strong>';

	//Voorwaarden
	if(isset($_POST['acptterms'])){
		$acptterms = true;
	}
	else {
		$acptterms = false;
		echo '<p>'.$error.'Voorwaarden niet geaccepteerd.<p>';
	}

    //Gebruiksnaam
	if(empty($username_test)){

		echo '<p>'.$error.'Geen gebruikersnaam ingevoerd.<p>';
	}
	elseif (!preg_match("/^[a-z\d_]{5,15}$/i",$username_test)) {

		echo '<p>'.$error.'Gebruiksnaam mag alleen uit letters en cijfers bestaan en moet minimaal 5 tekens lang zijn.<p>';
	}
	elseif ($username_test != $username_test2) {

		echo '<p>'.$error.'Gebruikersnamen komen niet overeen.<p>';
	}
	else{
		$username = $username_test;
	}

	//Wachtwoord
	if(empty($password_test)){

		echo '<p>'.$error.'Geen wachtwoord ingevoerd.<p>';
	}
	elseif (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password_test)) {

		echo '<p>'.$error.'Wachtwoord moet uit minimaal 8 tekens bestaan met een hoofdletter en een cijfer.<p>';
	}
	elseif ($password_test != $password_test2) {

		echo '<p>'.$error.'Wachtwoorden komen niet overeen.<p>';
	}
	else{
		$password = md5($password_test);
	}

	//Voornaam
	if(empty($firstname_test)){

		echo '<p>'.$error.'Geen voornaam ingevoerd.<p>';
	}
	elseif (!preg_match("/^[a-zA-Z]+$/",$firstname_test)) {

		echo '<p>'.$error.'Voornaam mag alleen uit letters bestaan.<p>';
	}
	else{
		$firstname = $firstname_test;
	}

	//Tussenvoegsel
	if(empty($prefix_test)){
		$prefix = "NULL";
	}
	elseif (!preg_match("/^[a-zA-Z ]+$/",$prefix_test)) {
		echo '<p>'.$error.'Tussenvoegsel mag alleen uit letters en spaties bestaan.<p>';
	}
	else{
		$prefix = "'".$prefix_test."'";
	}

	//Achternaam
	if(empty($lastname_test)){
		echo '<p>'.$error.'Geen achternaam ingevoerd.<p>';
	}
	elseif (!preg_match("/^[a-zA-Z]+$/",$lastname_test)) {
		echo '<p>'.$error.'Achternaam mag alleen uit letters bestaan.<p>';
	}
	else{
		$lastname = $lastname_test;
	}

	//Straatnaam
	if(empty($street_test)){
		echo '<p>'.$error.'Geen straatnaam ingevoerd.<p>';
	}
	elseif (!preg_match("/^[a-zA-Z ]+$/",$street_test)) {
		echo '<p>'.$error.'Straatnaam mag alleen uit letters en spaties bestaan.<p>';
	}
	else{
		$street = $street_test;
	}

	//Huisnummer
	if(empty($streetnumber_test)){
		echo '<p>'.$error.'Geen huisnummer ingevoerd.<p>';
	}
	elseif (!preg_match("/^\d+$/",$streetnumber_test)) {
		echo '<p>'.$error.'Huisnummer mag alleen uit cijfers bestaan.<p>';
	}
	else{
		$streetnumber = (int) $streetnumber_test;
	}

	//Postcode
	if(empty($postalcode_test)){
		echo '<p>'.$error.'Geen postcode ingevoerd.<p>';
	}
	elseif (!preg_match("/^[0-9]{4}[a-zA-Z]{2}$/",$postalcode_test)) {
		echo '<p>'.$error.'postalcode mag alleen uit 4 cijfers en 2 letters bestaan.<p>';
	}
	else{
		$postalcode = $postalcode_test;
	}

	//Woonplaats
	if(empty($city_test)){
		echo '<p>'.$error.'Geen woonplaats ingevoerd.<p>';
	}
	elseif (!preg_match("/^[a-zA-Z ]+$/",$city_test)) {
		echo '<p>'.$error.'woonplaats mag alleen uit letters en spaties bestaan.<p>';
	}
	else{
		$city = $city_test;
	}

	//Email
	if(empty($email_test)){
		echo '<p>'.$error.'Geen email ingevoerd.<p>';
	}
	elseif (!filter_var($email_test, FILTER_VALIDATE_EMAIL)) {
		echo '<p>'.$error.'Geen juiste email ingevoerd.<p>';
	}
	else{
		$email = $email_test;
	}

	//Geslacht
	if(empty($gender_test)){
		echo '<p>'.$error.'Geen geslacht ingevoerd.<p>';
	}
	elseif (!preg_match("/^[M,V]{1}$/",$gender_test)) {
		echo '<p>'.$error.'geslacht kan alleen M of V zijn.<p>';
	}
	else{
		$gender = $gender_test;
	}


	if ($acptterms && !empty($username) && !empty($firstname) && !empty($lastname) && !empty($street) && !empty($streetnumber) && !empty($postalcode) && !empty($city) && !empty($email) && !empty($gender) && !empty($password)) {
	$query = "INSERT INTO GEBRUIKER VALUES ('$username','$firstname',$prefix,'$lastname','$street',$streetnumber,'$postalcode','$city','$email','$gender','$password')";

		echo $query;
		$result = sqlsrv_query(dbConnected(), $query);

		if ($result) {
			header('Location: index.php');
		}
		else {
			echo '<p>Error: Kan gegevens niet in database opslaan.';
			print_r(sqlsrv_errors());
		}
	}


}





	
?>