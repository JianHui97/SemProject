<?php 
	require("connection.php");
	mysqli_select_db($conn, "ims");

	function insertEquipment($GroupName, $Email, $HpNo, $EquipmentType, $Quantity, $DateToUse){
		global $conn;
		$query= "INSERT INTO equipment (GroupName, Email, HpNo, EquipmentType, Quantity, DateToUse)VALUES('".$GroupName."','".$Email."','".$HpNo."','".$EquipmentType."','".$Quantity."','".$DateToUse."')";
		$result = mysqli_query($conn, $query);
		return $result;
	}

?>