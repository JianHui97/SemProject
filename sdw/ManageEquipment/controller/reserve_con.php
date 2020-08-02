<?php

require_once '../model/manage_equipment_model/manage_equipment_model.php';
/**
 * 
 */
class controller
{
	//return value to the bookequip.php
	public function view()
	{
		//call static method All from user class
		$viewequipEMS = equipment_model::All();

		return $viewequipEMS;
	}
	
	//return value to the cart.php
	public function viewing()
	{
		//call static method All from user class
		$viewcartEMS = reserve_model::All();

		return $viewcartEMS;
	}
	
	//get value from the reserveequip.php
	public function addbook()
	{
		$addbookEMS = new adds();
		
		$addbookEMS->id = $_POST['id'];
		$addbookEMS->equipment = $_POST['equipment'];
		$addbookEMS->quantity = $_POST['quantity'];
		
		$addbookEMS->save();
		
	
	}
	
	//get value from the deletebook.php
	public function deletebook()
	{
		$deletebookEMS = new deletes();
		
		$deletebookEMS->id = $_POST['id'];
		
		$deletebookEMS->save();
		
	
	}
	
	
	//get value from the editbook.php
	public function editbook()
	{
		$editbookEMS = new edits();
		
		$editbookEMS->id = $_POST['id'];
		$editbookEMS->equipment = $_POST['equipment'];
		$editbookEMS->quantity = $_POST['quantity'];
		
		$editbookEMS->save();
		
	
	}
	
}

