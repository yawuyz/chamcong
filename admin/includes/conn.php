<?php
	$conn = new mysqli('localhost', 'root', '', 'sourcecodefreesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>