 <?php

require_once 'Libs/Payment_Detail_Database.php';

class modelreceipt
{

	public function pp()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ICE-CINNO";

 		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

			$sql = "SELECT * FROM CreditCard INNER JOIN Participants ON CreditCard.ParticipantID = Participants.ParticipantID";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) 
			{
				
			}
	return $resultset;
	}
}
?>
