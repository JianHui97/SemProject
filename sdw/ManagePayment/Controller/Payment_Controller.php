<?php
require_once '../Model/Payment_Receipt_Model.php';

class paymentreceipt
{

	public function viewreceipt()
	{

		$details = new modelreceipt();

		$resultset = $details->pp();
		return $resultset;
	}

}
?>

<?php
require_once '../Model/Payment_Detail_Model.php';


?>
