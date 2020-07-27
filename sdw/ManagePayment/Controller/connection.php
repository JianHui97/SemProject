<?php 
	global $conn;
	$conn=new mysqli("localhost", "root", "");

	// Create database
	if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
?>