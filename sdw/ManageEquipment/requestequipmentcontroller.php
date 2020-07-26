<?php
include ("requestequipmentmodel.php");

extract( $_POST );
	       // to create a query to be executed in sql
	        $GroupName = $_POST['GroupName'];
	       // $ParticipantID = $_POST['ParticipantID'];
	        $Email = $_POST['Email'];
	        $HpNo = $_POST['HpNo'];
			$EquipmentType = $_POST['EquipmentType'];
			$Quantity = $_POST['Quantity'];
			$DateToUse = $_POST['DateToUse'];

$result = insertEquipment($GroupName, $Email, $HpNo, $EquipmentType, $Quantity, $DateToUse);
			if($result){
				echo "<script language='javascript'>";
				echo "alert('Request has been created.');";
				echo "window.location.href = 'equipmentchecklist.php';";
				echo "</script>";
			}
			else{
		 		echo "Error: " . mysqli_error();
			}
?>	