<?php 
	require("../connection.php");
	mysqli_select_db($conn, "ims");

	function registerCommittee($name, $age, $contact, $gender, $username, $email, $password){
		global $conn;
		$check_username = "SELECT * FROM committee WHERE Username='$username'";
		$check_email = "SELECT * FROM committee WHERE Email='$email'";
		$res_check_u = mysqli_query($conn, $check_username);
		$res_check_e = mysqli_query($conn, $check_email);
		
		$query = "INSERT INTO committee (Name, Age, Gender, Contact, Username, Email, Password) 
			VALUES ('".$name."', '".$age."', '".$gender."', '".$contact."', '".$username."', '".$email."', '".$password."')";
		$result = mysqli_query($conn, $query);
		return $result;
		}
	

	function registerJury($email, $username, $password){
		global $conn;
		
		$query = "UPDATE jury SET Username='$username', Password='$password' 
			WHERE Email='$email'";
		$result = mysqli_query($conn, $query);
		return $result;
	}
	
	function registerParticipant($groupname, $product, $arraymem_name, $arraymem_age, $arraymem_gender, $arraymem_contact, $partusername, $partemail, $partpassword){
	global $conn;
	$query = "INSERT INTO participants (GroupName, InnovationProduct, MemberName, MemberAge, MemberGender, MemberContact, Username, Email, Password)
				VALUES ('".$groupname."', '".$product."', '".$arraymem_name."', '".$arraymem_age."', '".$arraymem_gender."', '".$arraymem_contact."',
				'".$partusername."', '".$partemail."', '".$partpassword."')";
	$result = mysqli_query($conn, $query);
	return $result;
	}
?>