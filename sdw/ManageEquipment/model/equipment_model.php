<?php

require_once '../Library/database.php';
/**
 * 
 */
 
//to insert the equipment into the database
class add
{
	public $id;
	public $equipment;
	public $price;
	public $quantity;
	

	public function save()
	{
		$query = "INSERT INTO equipment (id, equipment, price, quantity) VALUES (:id, :equipment, :price, :quantity)";

		$param = [

				':id' => $this->id,
				':equipment' => $this->equipment,
				':price' => $this->price,
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

// to delete the equipment in the database
class del
{
	public $id;
	public $equipment;
	public $price;
	public $quantity;
	

	public function save()
	{
		$query = "DELETE FROM equipment WHERE id = :id";

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

//to update the equipment in the database
class edit
{
	public $id;
	public $equipment;
	public $price;
	public $quantity;
	

	public function save()
	{
		$query = "UPDATE equipment SET equipment = :equipment, price = :price, quantity = :quantity WHERE id = :id";

		$param = [

				':id' => $this->id,
				':equipment' => $this->equipment,
				':price' => $this->price,
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

//to view all the available equipment in the database
class equipment_model
{
	public static function ALL()
	{
	
		$query = "SELECT * FROM equipment ORDER BY id ASC";

		$viewequipEMS = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $viewequipEMS;
	}
}

