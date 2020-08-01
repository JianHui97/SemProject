<?php

require_once '../model/manage_equipment_model/manage_equipment_model.php';
/**
 * 
 */
class controller
{

	//get value from the addequip.php
	public function addequip()
	{
		$addequipEMS = new add();
		
		$addequipEMS->id = $_POST['id'];
		$addequipEMS->equipment = $_POST['equipment'];
		$addequipEMS->price = $_POST['price'];
		$addequipEMS->quantity = $_POST['quantity'];
		
		$addequipEMS->save();
		
	
	}
	
	//get value from the deleteequip.php
	public function deleteequip()
	{
		$deleteequipEMS = new del();
		
		$deleteequipEMS->id = $_POST['id'];
		
		$deleteequipEMS->save();
		
	
	}
	
	//get value from the editequip.php
	public function editequip()
	{
		$editequipEMS = new edit();
		
		$editequipEMS->id = $_POST['id'];
		$editequipEMS->equipment = $_POST['equipment'];
		$editequipEMS->price = $_POST['price'];
		$editequipEMS->quantity = $_POST['quantity'];
		
		$editequipEMS->save();
		
	
	}
	
	//return value to the viewequip.php
	public function view()
	{
		//call static method All from user class
		$viewequipEMS = equipment_model::All();

		return $viewequipEMS;
	}
}

