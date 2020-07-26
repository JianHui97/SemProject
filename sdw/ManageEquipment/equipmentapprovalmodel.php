<?php 
	require("connection.php");
	mysqli_select_db($conn, "ims");

	function insertEquipment($ParticipantName, $ParticipantID, $ParticipantEmail, $HpNo, $EquipmentType, $Quanity, $DateToUse ){
		global $conn;
		$query= "INSERT INTO equipment (ParticipantName, ParticipantID, ParticipantEmail, HpNo, EquipmentType, Quanity, DateToUse )VALUES('".$ParticipantName."','".$ParticipantID."','".$ParticipantEmail."','".$HpNo."','".$EquipmentType."','".$Quanity."','".$DateToUse."')";
		$result = mysqli_query($conn, $query);
		return $result;
	}

	function 

?>