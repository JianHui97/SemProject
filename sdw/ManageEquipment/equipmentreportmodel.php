<?php
	require("connection.php");
	mysqli_select_db($conn, "ims");

	function retrieveReport(){
		global $conn;
		$query = "SELECT * FROM `equipment`";
		$result = mysqli_query($conn, $query);
		return $result;
	}
	
?>