 <?php

require_once 'Libs/Payment_Detail_Database.php';

class modeldetail
{

	public function pp()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ims";

 		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

			$sql = "SELECT * FROM equipment INNER JOIN participants ON equipment.ParticipantID = participants.ParticipantID WHERE EquipmentStatus = 'Approve'";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) 
			{
				
			}
	return $resultset;
	}
}

?>
