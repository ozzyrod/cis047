<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CIS 047 Assignment 10</title>
</head>
<body>
	<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$databasename = "StarWars";
	
	//create connection to database
	$connection = new mysqli( $host, $user, $pass, $databasename );
	
	//check connection to database
	if ( ! $connection ) {
		die( "Connection failed! Here is what is wrong: " . mysqli_connect_error() );
	}
	
	//do the SQL
	$sql = "UPDATE `StarWars`.`Films` SET `Title` = 'Star Wars (aka \"A New Hope\")' WHERE `Films`.`Episode` = 4";
	$dosql = mysqli_query( $connection, $sql );
	
	//check if error
	if ( $dosql ) {
		echo "SQL command executed successfully!";
	} else {
		die( "Something went wrong! Here is what is wrong: " . mysqli_error( $connection ) );
	}
	
	//close the connection to the database
	mysqli_close( $connection );
	?>
</body>
</html>