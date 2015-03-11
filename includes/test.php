<?php



if (isset($_POST['login']) && isset($_POST['password'])){
	$user = $_POST['login'];
	$password = $_POST['password'];
	if (!empty($user) && !empty($password)) {
		
		}
	else {
		<div id="login"> 
			<h3>LOGIN</h3>
			<form method="post" action="<?= $_SERVER['SCRIPT_NAME']?>">
				<input type="text" name="login" value="" placeholder="Gebruikersnaam of Email" class="logintext">
				<input type="password" name="password" value="" placeholder="Wachtwoord" class="logintext">
				<input type="submit" name="commit" value="Login"> <br>
				<label><input type="checkbox" name="remember_me" id="remember_me"> Onthouden</label>
				<h4>
					<a href="vergeten.php">Vergeten?</a>
					<a href="registreren.php">Registreer</a>
				</h4>
			</form>
		</div>
	}
}
?>


<?php





if($conn) 
{
	echo "Connection established.<br />";

	$tsql = "SELECT stuknr, titel from stuk";
	$result = sqlsrv_query( $conn, $tsql, null);

	if ( $result === false) 
	{ 
		die( print_r( sqlsrv_errors() ) ); 
	}

	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
	{
		echo $row['stuknr'].", ".$row['titel']."<br />";
	} 	
	sqlsrv_free_stmt($result);
  	sqlsrv_close($conn);
} else
{
	echo "Connection could not be established.<br />";
	die( print_r( sqlsrv_errors(), true));
}

?>


<?php















    if (
        // hash the password with the unique salt.
        $password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked
                return false;
            } else {
                // Check if the password in the database matches
                // the password the user submitted.
                if ($db_password == $password) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    $_SESSION['user_id'] = $user_id;
                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                                                "", 
                                                                $username);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', 
                              $password . $user_browser);
                    // Login successful.
                    return true;
                } else {
                    // Password is not correct
                    // We record this attempt in the database
                    $now = time();
                    $mysqli->query("INSERT INTO login_attempts(user_id, time)
                                    VALUES ('$user_id', '$now')");
                    return false;
                }
            }
        } else {
            // No user exists.
            return false;
        }
    }
}

?>