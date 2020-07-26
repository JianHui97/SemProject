<?php

		require_once("equipmentchecklistmodel.php");
		$result = retrieveEquipment();
		if($result){
			while($row=mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row["ParticipantID"] . "</td>";
					echo "<td>" . $row["GroupName"] . "</td>";
					echo "<td>" . $row["Email"] . "</td>";
					echo "<td>" . $row["HpNo"] . "</td>";
					echo "<td>" . $row["EquipmentID"] . "</td>";
					echo "<td>" . $row["EquipmentType"] . "</td>";
					echo "<td>" . $row["Quantity"] . "</td>";
					echo "<td>" . $row["DateToUse"] . "</td>";
					echo "<td><a href='equipmentreport.php?id=" . $row["EquipmentID"] . "'>Reject</a>";
					echo "&nbsp &nbsp <a href='equipmentreport.php?id=" . $row["EquipmentID"] . "'>Approve</a></td>";
					echo "</tr>";
					//echo "<td>" . $row["EquipmentStatus"] . "</td>";
				
			}

			
		}
		else{
			header("location: equipmentchecklist.php#error");
		}
?>