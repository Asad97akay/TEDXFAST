<?php
	//1. Create a database connection
	DEFINE('DB_SERVER', '127.0.0.1');
	DEFINE('DB_USER', 'root');  
	DEFINE('DB_PASS', '');   	    // Put your database password here if any.
	DEFINE('DB_NAME', 'ted');  			
	
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);   // $connection points to the database we have connected
	mysqli_select_db($connection,'ted');
	// Test if connection occured
	if(mysqli_connect_errno()){  // If there is an error name then there is a problem
		// mysqli_connect_error() returns an empty string if there is no error else it returns the error string.
		die( "Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
	}
	echo 'you have connected successfully';
?>