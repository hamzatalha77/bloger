<?php
	  $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hamza";
    $conn = mysqli_connect($server, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>