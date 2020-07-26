<?php 
	require("connection.php");

	if(empty($_SESSION["userType"]) && empty($_SESSION["id"])){
		$_SESSION["userType"] = "guest";
		$_SESSION["id"] = "";
	}
?> 