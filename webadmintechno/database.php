<?php
	$database = "adctegwn_vedpvc";
	$host     = "localhost";
	$user     = "adctegwn_vedpvc";
	$password = "vedpvc@#321";
	
	$mysqli   = mysqli_connect($host, $user, $password);
	
	if (mysqli_connect_errno($mysqli)) {
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	mysqli_select_db($mysqli, "adctegwn_vedpvc") or die("Database access failed: " . mysqli_error()); 
	
	$dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $password);

	if(!$dbh)
	{
		echo "unable to connect to database";
	}
?>