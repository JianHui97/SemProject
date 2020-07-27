<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ICE-CINNO";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

    	if(isset($_POST["submit"]))
    	{
    		$CCNumber = $_POST['CCNumber'];
    		$ExpiryDate = $_POST['ExpiryDate'];
    		$CVV = $_POST['CVV'];
   			$Name = $_POST['Name'];

   			$query = "SELECT * FROM CreditCard WHERE (CreditCardNumber='".$CCNumber."' AND ExpiryDate='".$ExpiryDate."' AND CVV='".$CVV."' AND Name='".$Name."')";

   			$result = mysqli_query($conn, $query);
			$rowNo = mysqli_num_rows($result);

   			if($rowNo < 1)
			{
						echo '<script type="text/javascript">';
						echo 'alert ("Verification Failed. Please Try Again.")';
						echo '</script>';
						echo '<script> location.href = "../View/Payment_Form.php" </script>';
			}
			else 
			{
						echo '<script type="text/javascript">';
						echo 'alert ("Verification Successful.")';
						echo '</script>';
						echo '<script> location.href = "../View/Payment_Receipt.php" </script>';
			}
		}

?>