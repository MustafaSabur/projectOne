<?php 
if (isset($_POST['login']) && isset($_POST['password'])){
	$user = $_POST['login'];
	$password = $_POST['password'];
	login($user, $password, dbConnected());

	// $logStatus = login($user, $password, dbConnected());
	// if ($logStatus == 1){
	// 	include 'includes/loggedin.php';
	// }
	// elseif ($logStatus == 2){
	// 	$message = "Onbekend combinatie.";
	// 	include 'includes/loggedout.php';
	// }
	// elseif ($logStatus == 3){
	// 	$message = "Vul alle velden in aub.";
	// 	include 'includes/loggedout.php';
	// }
}


if (logged_in()) {
	include 'includes/loggedin.php';
}
else {
	$message = "";
	include 'includes/loggedout.php';
}

?>
