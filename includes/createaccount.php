
<?php

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$prefix = $_POST['prefix'];
	$lastname = $_POST['lastname'];
	$street = $_POST['street'];
	$streetnumber = $_POST['streetnumber'];
	$postalcode = $_POST['postalcode'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
}

echo $username;
echo $gender;

// $query = "INSERT INTO GEBRUIKER VALUES ('".$username."','".$firstname."',
// 	'".$prefix."','".$lastname."','".$street."','".$streetnumber."',
// 	'".$postalcode."','".$city."','".$email."','".$gender."','".$password."')";

// $result = sqlsrv_query($conn, $query);
	
?>