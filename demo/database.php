<?php
	$database = "amor";
	$host     = "localhost";
	$user     = "root";
	$password = "root";
	
	$mysqli   = mysqli_connect($host, $user, $password);
	
	if (mysqli_connect_errno($mysqli)) {
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	mysqli_select_db($mysqli, "amor") or die("Database access failed: " . mysqli_error()); 
	
	$dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $password);

	if(!$dbh)
	{
		echo "unable to connect to database";
	}
?>