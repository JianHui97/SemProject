<?php

require_once '../Library/database.php';
/**
 * 
 */

//to view the available equipment in the database
class equipment_model
{
	public static function ALL()
	{
	
		$query = "SELECT * FROM equipment ORDER BY id ASC";

		$viewequipEMS = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $viewequipEMS;
	}
}

//to view the equipment that had been reserve by the customer
class reserve_model
{
	public static function ALL()
	{
	
		$query = "SELECT * FROM bookequip ORDER BY id ASC";

		$viewcartEMS = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $viewcartEMS;
	}
}

//to insert the reserve equipment into the database
class adds
{
	public $id;
	public $equipment;
	public $quantity;
	

	public function save()
	{
		$query = "INSERT INTO bookequip (id, equipment, quantity) VALUES (:id, :equipment, :quantity)";

		$param = [

				':id' => $this->id,
				':equipment' => $this->equipment,
				':quantity' => $this->quantity,
			];

			$stmt = DB::RUN($query, $param);

			if ($stmt) {
    echo "<script type='text/javascript'>alert('your equipment has been successfully added!')</script>";
						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}

}

// to delete the reserve equipment in the database
class deleletes
{
	public $id;
	public $equipment;
	public $price;
	public $quantity;
	

	public function save()
	{
		$query = "DELETE FROM bookequip WHERE id = :id";

		$param = [

				':id' => $this->id,
			];

			$stmt = DB::RUN($query, $param);

			if ($stmt) {
				echo "<script type='text/javascript'>alert('your equipment has been successfully deleted!')</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
	}

}

//to update the reserve equipment in the database
class edits
{
	public $id;
	public $equipment;
	public $quantity;
	

	public function save()
	{
		$query = "UPDATE bookequip SET equipment = :equipment, quantity = :quantity WHERE id = :id";

		$param = [

				':id' => $this->id,
				':equipment' => $this->equipment,
				':quantity' => $this->quantity,
			];

			$stmt = DB::RUN($query, $param);

			if ($stmt) {
		echo "<script type='text/javascript'>alert('your equipment has been successfully edited!')</script>";
						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}

}
