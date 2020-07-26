<?php
	require '../Model/boothmodel.php';
	
	
	class BoothController{
		
		function update($boothid,$boothlocation,$participantsid)
		{
			$updatebooth = new booth();
			$updatebooth->BoothID = $boothid;
			$updatebooth->Boothlocation = $boothlocation;
			$updatebooth->ParticipantsID = $participantsid;
			
			$updatebooth->updatebooth($boothid,$boothlocation);
			
			echo "<script language = 'javascript'>";
			echo "alert('Booth successfully updated!');";
			echo "window.location.href = '../View/BoothView.php';";
			echo "</script>";
			
		}
		
		function insert($participantsid,$boothlocation)
		{
			global $conn;
			
			$newbooth = new booth();
			$newbooth->Boothlocation = $boothlocation;
			$newbooth->ParticipantsID = $participantsid;
			
			$result=$newbooth->newbooth($participantsid,$boothlocation);
			
			if($result){
				echo "<script language = 'javascript'>";
				echo "alert('Booth successfully added!');";
				echo "window.location.href = 'BoothView.php';";
				echo "</script>";
			}else{
				echo "Error: " . mysqli_error($conn);
			}
			
		}
		
		function delete($selectedboothid)
		{
			global $conn;
			$deletebooth = new booth();
			//$deletebooth->BoothID = $selectedboothid;
			
			$result=$deletebooth->removebooth($selectedboothid);
			
			if($result){
				echo "<script language = 'javascript'>";
				echo "alert('Booth successfully removed!');";
				echo "window.location.href = 'BoothView.php';";
				echo "</script>";
			}else{
				echo "Error: " . mysqli_error($conn);
			}
			
		}
		
		
	}

?>