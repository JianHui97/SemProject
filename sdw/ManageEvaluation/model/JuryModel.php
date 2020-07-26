<?php

	$conn=new mysqli("localhost", "root", "");

	// Create database
	if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    

	mysqli_select_db($conn, "ims");
		
		
		
		function AddJury($name,$age,$gender,$contact,$email){
			global $conn;
			$add = "INSERT INTO `jury` (`Name`,`Age`,`Gender`,`Contact`,`Email`)VALUES('$name','$age','$gender','$contact','$email')";
			$result = mysqli_query($conn, $add);
			return $result;
		
		}
		
		
		function AllJury(){
		global $conn;

		$sql = "SELECT * FROM jury";
		$result = $conn->query($sql);

		return $result;

		}
		
		function DeleteJury($dlt_id){
		global $conn;
		$sql = "DELETE FROM jury WHERE JuryID = '$dlt_id'";
		$result = $conn->query($sql);

		return $result;
		}
		
		function EditJury($id,$name,$age,$gender,$contact){
		global $conn;
		$sql = "UPDATE jury SET Name = '$name', Age = '$age', Gender = '$gender', Contact = '$contact' WHERE JuryID = '$id'";
		$result = $conn->query($sql);

		return $result;
		}
		
		function Evaluation($id){
		global $conn;
		$sql = "SELECT * FROM evaluation WHERE JuryID = '$id' ";
		$result = $conn->query($sql);

		return $result;
		}
	
	
		function AllResult(){
		global $conn;

		$sql = "SELECT evaluation.Mark, evaluation.Remark, evaluation.ParticipantID, participants.GroupName, participants.InnovationProduct, jury.Name FROM evaluation JOIN participants ON evaluation.ParticipantID=participants.ParticipantID JOIN jury ON evaluation.JuryID=jury.JuryID ORDER BY evaluation.Mark DESC;";
		$result = $conn->query($sql)or die($conn->error);

		return $result;

		}
		
		function ListID(){
			global $conn;

		$sql = "SELECT * FROM participants";
		$result = $conn->query($sql)or die($conn->error);

		return $result;
		}
		
		function AddEvaluation($pid,$jid,$mark,$remark){
			global $conn;
			$insert = "INSERT INTO `evaluation` (`Mark`,`Remark`,`ParticipantID`,`JuryID`)VALUES('$mark','$remark','$pid','$jid')";
			$result = mysqli_query($conn, $insert);
			return $result;
		}
	
?>