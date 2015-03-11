<?php
session_start();

function logged_in(){
	if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		return true;
	}
	else return false;
}
?>