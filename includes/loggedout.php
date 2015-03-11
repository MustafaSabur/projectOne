<div id="login"> 
	<h5><?php echo $message ?></h5>
	<h3>LOGIN</h3>
	<form method="post" action="<?= $_SERVER['SCRIPT_NAME']?>">
		<input type="text" name="login" value="" placeholder="Gebruikersnaam" class="logintext">
		<input type="password" name="password" value="" placeholder="Wachtwoord" class="logintext">
		<input type="submit" name="commit" value="Login" class="loginsubmit"> <br>
		<label><input type="checkbox" name="remember_me" id="remember_me"> Onthouden</label>
		<h4>
			<a href="vergeten.php">Vergeten?</a>
			<a href="registreren.php">Registreer</a>
		</h4>
	</form>
</div>