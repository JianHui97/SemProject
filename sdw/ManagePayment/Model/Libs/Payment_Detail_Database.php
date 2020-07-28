<?php

require_once 'Payment_Detail_Config.php';

class database
{

	public static function connect($value='')
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ICE-CINNO";

		$conn = mysqli_connect($servername, $username, $password, $dbname)  or die("Connection failed: " . mysqli_connect_error());

		if (mysqli_connect_errno()) {
    		printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
		}
	}
}

?>