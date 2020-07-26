<?php
	session_start();
	if(isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$category = $_POST["category"];
		require("../../ManageLogin/Model/LoginModel.php");
		
		$login = checkLogin($username, $password, $category);
		if($login == 1){
			if($category=="committee"){
				
				header("location:/sdw/ManageLogin/View/CommitteeProfile.php");
			}
			else if($category=="jury"){
				
				header("location:/sdw/ManageLogin/View/JuryProfile.php");
			}
			else if($category=="participant"){
				
				header("location:/sdw/ManageLogin/View/ParticipantProfile.php");
			}
		}
		
		else{
			
			echo "<script language='javascript'>";
			echo "alert('Incorrect login details. Please try again');";
			echo "window.location.href = '/sdw/ManageLogin/View/LoginForm.php';";
			echo "</script>";
		}
	}
	else{
		header("location:index.php");
	}
?>