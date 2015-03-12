<?php

function ads(){
	$source= array("ad1.png", "ad2.gif", "ad3.jpg", "ad4.gif", "ad5.jpg", "ad6.png");
	return $source[rand(0,5)];
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

function printProductenDiv($tsql){
    $conn = dbConnected();
    if($conn){

        $result = sqlsrv_query( $conn, $tsql, null);
        if ( $result === false){
            die( print_r( sqlsrv_errors() ) );
        }
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
            echo '<div class="product">';
            echo '<h3>';
            echo  $row['MERK'];
            echo '</h3>';
            echo '<a href="productpagina.php&#63;id=';
            echo $row['PRODUCTNUMMER'];
            echo '"><img  src="';
            echo $row['AFBEELDING_GROOT'];
            echo '" alt="calvin-pantalon"></a>';
            echo '<p>';
            echo  $row['PRODUCTNAAM'];
            echo '</p>';
            echo '<p><span>';
            echo $row['PRIJS'];
            echo '</span> <button type="button" >In Winkelwagen</button></p>';
            echo '</div>';
        }
        sqlsrv_free_stmt($result);
        sqlsrv_close($conn);
    }
    else{
        echo "Kan geen verbinding maken met de database .<br />";
        die( print_r( sqlsrv_errors(), true));
    }
}

function printProductenPagina() {
    $tsql = "SELECT * from PRODUCT";
    printProductenDiv($tsql);
}

function gerelateerdeProduct($pid){
    $tsql = "SELECT * from PRODUCT WHERE PRODUCTNUMMER = $pid";
    printProductenDiv($tsql);
}

function zoekProducten($zoekTekst) {
    $tsql = "SELECT * FROM PRODUCT WHERE PRODUCTNAAM like '%$zoekTekst%';";
    printProductenDiv($tsql);
}

function printMerken($merk) {
    $tsql = "SELECT * FROM PRODUCT WHERE MERK = '$merk';";
    printProductenDiv($tsql);
}

function returnProduct($pid) {
    $conn = dbConnected();
    if($conn)
    {
        $tsql = "SELECT * from PRODUCT WHERE PRODUCTNUMMER = $pid";
        $result = sqlsrv_query( $conn, $tsql, null);
        if ( $result === false)
        {
            die( print_r( sqlsrv_errors() ) );
        }
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
            return $row;
        }
        sqlsrv_free_stmt($result);
        sqlsrv_close($conn);
    } else
    {
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
}


function getGerelateerdeProduct($pid){
    $conn = dbConnected();
    if($conn)
    {
        $tsql = "SELECT PRODUCTNUMMER_GERELATEERD_PRODUCT FROM PRODUCT_GERELATEERD_PRODUCT INNER JOIN PRODUCT  ON PRODUCT.PRODUCTNUMMER  = PRODUCT_GERELATEERD_PRODUCT.PRODUCTNUMMER  WHERE PRODUCT.PRODUCTNUMMER = $pid";
        $result = sqlsrv_query( $conn, $tsql, null);
        if ( $result === false)
        {
            die( print_r( sqlsrv_errors() ) );
        }
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
            gerelateerdeProduct($row['PRODUCTNUMMER_GERELATEERD_PRODUCT']);

        }
        sqlsrv_free_stmt($result);
        sqlsrv_close($conn);
    } else
    {
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
}

function printMerkenKnop(){

    $conn = dbConnected();
    if($conn){

        $tsql = "SELECT DISTINCT MERK FROM PRODUCT;";
        $result = sqlsrv_query( $conn, $tsql, null);
        if ( $result === false){
            die( print_r( sqlsrv_errors() ) );
        }
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
            echo '<div class="catogorie"><a href="productlijst.php&#63;merk=';
            echo $row['MERK'];
            echo '">';
            echo $row['MERK'];
            echo '</a></div>';
        }
        sqlsrv_free_stmt($result);
        sqlsrv_close($conn);
    }
    else{
        echo "Kan geen verbinding maken met de database .<br />";
        die( print_r( sqlsrv_errors(), true));
    }

}

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>
