<?php
/**
 * Connects to the database and returns a connection.
 *
 * @return mysqli
 */
function dbConnect() {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$databasename = "blogging_tool";
	
	//create connection to database
	$connection = new mysqli( $host, $user, $pass, $databasename );
	
	//check connection to database
	if ( ! $connection ) {
		die( "Connection failed! Here is what is wrong: " . mysqli_connect_error() );
	}
	
	return $connection;
}