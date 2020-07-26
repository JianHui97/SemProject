<?php
	require("../../ManageLogin/Model/RegisterModel.php");
	if(isset($_POST["register"])){
		if($_GET["registerAs"] == "committee"){
			$name = $_POST["name"];
			$age = $_POST["age"];
			$contact = $_POST["contact"];
			$gender = $_POST["gender"];
			$username = $_POST["username"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$result = registerCommittee($name, $age, $contact, $gender, $username, $email, $password);
			if($result){
				//echo "<script type='text/javascript'>alert('Your account has been successfully registered.\n You can now log in using the registered account.')</script>";
				header("Location: /sdw/ManageLogin/View/index.php");
			}
			else{
				
				echo "Error: " . mysqli_error($conn);
			}			
		}
		else if($_GET["registerAs"] == "jury"){
			$username = $_POST["username"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$result = registerJury($email, $username, $password);
			
			if($result){
				//echo "<script type='text/javascript'>alert('Your account has been successfully registered.\n You can now log in using the registered account.')</script>";
				header("Location: /sdw/ManageLogin/View/index.php");
			}
			else{
				
				echo "Error: " . mysqli_error($conn);
			}				
		}
		else if($_GET["registerAs"] == "participant"){
			$groupname = $_POST["groupname"];
			$product = $_POST["product"];
			
			$mem_name = $_POST["mem_name"];
			$arraymem_name = implode(', ', $mem_name);
			
			$mem_age = $_POST["mem_age"];
			$arraymem_age = implode(', ', $mem_age);
			
			$mem_gender = $_POST["mem_gender"];
			$arraymem_gender = implode(', ', $mem_gender);
			
			$mem_contact = $_POST["mem_contact"];
			$arraymem_contact = implode(', ', $mem_contact);
			
			$partusername = $_POST["partusername"];
			$partemail = $_POST["partemail"];
			$partpassword = $_POST["partpassword"];
			
			$result = registerParticipant($groupname, $product, $arraymem_name, 
					$arraymem_age, $arraymem_gender, $arraymem_contact, 
					$partusername, $partemail, $partpassword);
		
			if($result){
				//echo "<script type='text/javascript'>alert('Your account has been successfully registered.\n You can now log in using the registered account.')</script>";
				header("Location: /sdw/ManageLogin/View/index.php");
			}
			else{
				
				echo "Error: " . mysqli_error($conn);
			}			
		}
	}
	else{
		header("location:index.php#error");
	}
?>