<?php
	$servername = "linkers";
	$username = "anniegavr";
	$password = "pass";
	$dbname = "linkers";

	$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			$conn_result="failed";
		    die("Connection failed: " . $conn->connect_error);
		}else{
			$conn_result="failed";
		}

?>
