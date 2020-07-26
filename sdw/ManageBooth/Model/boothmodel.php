<?php
    require 'connection.php';
	mysqli_select_db($conn, "ims");
	
	
	class booth
	{
		public $BoothID;
		public $Boothlocation;
		public $ParticipantID;
		
		/* function viewbooth(){
			global $conn;
			$query = "SELECT *FROM booth
					INNER JOIN participants ON booth.ParticipantID = participants.ParticipantID;";
			$result = mysqli_query($conn, $query) or die("Error:". mysqli_error($conn));
			while($row=mysqli_fetch_assoc($result))
			{
				
			}
			return $result;
		} */
		
		function updatebooth($bid, $newbloc){
			global $conn;
			$update = "UPDATE booth 
					SET BoothLocation='".$newbloc.
					"'WHERE BoothID='".$bid."'";
			$result = mysqli_query($conn, $update);
			return $result;
		}
		
		function removebooth($selectedbid){
			global $conn;
			$delete = "DELETE FROM booth WHERE BoothID=".$selectedbid;
			$result = mysqli_query($conn, $delete);
			return $result;
		}
		
		function newbooth($participantsid, $boothlocation){
			global $conn;
			$add = "INSERT INTO `booth` (`BoothLocation`,`ParticipantID`)VALUES('$boothlocation','$participantsid')";
			$result = mysqli_query($conn, $add);
			return $result;
		}
		
		/* function viewparticipants(){
			global $conn;
			$query = "SELECT * FROM participants";
			$result = mysqli_query($conn, $query);
			return $result;
		} */
	}
?>