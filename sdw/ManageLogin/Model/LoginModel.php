<?php
	require("../connection.php");
	
	mysqli_select_db($conn, "ims");

	function checkLogin($username, $password, $category){
		global $conn;
		if($category == "committee"){
			$query = "SELECT * FROM committee WHERE Username = '".$username."'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			$rowNo = mysqli_num_rows($result);

		}
		else if($category == "jury"){
			$query = "SELECT * FROM jury WHERE Username = '".$username."'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			$rowNo = mysqli_num_rows($result);
			 
		}
		else if($category == "participant"){
			$query = "SELECT * FROM participants WHERE Username = '".$username."'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			$rowNo = mysqli_num_rows($result);
			 
		}
		else{
			echo "Incorrect login details";
			return;
		}

		if($rowNo < 1){
			echo "<script language='javascript'>";
			echo "alert('Incorrect login details. Please try again');";
			echo "window.location.href = '/sdw/ManageLogin/View/LoginForm.php';";
			echo "</script>";
			return;
		}
		else{
			if($category == "committee"){
				$dbpassword = $row["password"];
				$login = 1;
				return $login;
			}
			else if($category == "jury"){
				$dbpassword = $row["password"];
				$login = 1;
				return $login;
			}
			else if($category == "participant"){
				$dbpassword = $row["password"];
				$login = 1;
				return $login;
			}
			else{
				$login = 0;
				return $login;
			}
		}
	}


?>