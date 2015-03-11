<?php

function ads(){
	$source= array("ad1.png", "ad2.gif", "ad3.jpg", "ad4.gif", "ad5.jpg");
	return $source[rand(0,4)];
}

function dbConnected(){
	$serverName = "(local)\sqlexpress";
	$connectionInfo = array( "Database"=>"webshop",  "UID"=>"sa", "PWD"=>"111");
	$conn = sqlsrv_connect ($serverName, $connectionInfo);
	return $conn;
}

function dbClose($conn){
	sqlsrv_close($conn);
}

function login($user, $password, $conn) {
	if (!empty($user) && !empty($password)) {
		$query = "SELECT * FROM GEBRUIKER WHERE Gebruikersnaam = '".$user."' AND Wachtwoord = '".$password."'";
		$result = sqlsrv_query ($conn, $query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET));
		
		if(sqlsrv_num_rows($result) == 1 ) {
			$_SESSION['user'] = $user;
		}
	}
}

function printProductenPagina($conn) {

                    if($conn)
                    {

                        $tsql = "SELECT * from PRODUCT";
                        $result = sqlsrv_query( $conn, $tsql, null);
                        if ( $result === false)
                        {
                            die( print_r( sqlsrv_errors() ) );
                        }
                        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) { ?>
                            <?php   echo ' <div class="product">';
                            echo '<h3>';
                            echo  $row['MERK'];
                            echo '</h3>';
                            echo '<a href="productpagina.php"><img  src="';
                            echo $row['AFBEELDING_GROOT'];
                            echo '" alt="calvin-pantalon"></a>';
                            echo '<p>';
                            echo  $row['PRODUCTNAAM'];
                            echo '</p>';
                            echo '<p><span>';
                            echo $row['PRIJS'];
                            echo '</span> <button type="button" >In Winkelwagen</button></p>';
                            echo '</div>';
                            $productcode = $row['PRODUCTNUMMER'];
                            $_SESSION['productcode']= $productcode;
                        } ?>
                        <?php   sqlsrv_free_stmt($result);
                        sqlsrv_close($conn);
                    } else
                    {
                        echo "Connection could not be established.<br />";
                        die( print_r( sqlsrv_errors(), true));
                    }
}

?>
