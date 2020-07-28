<?php

require_once '../controller/manage_equipment_controller/equipment_con.php';	

if (isset($_POST['submit'])) {
  $addequipEMS = new controller();
  // call method dd

  $addequipEMS->addequip();
}
  
?>

<!DOCTYPE html>
<html>

<head>

<style>
table, td , th{
  border: 1px solid black;
  border-collapse: collapse;
}
td {
  padding: 15px;
}
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

#add {
  background-color: white; 
  color: black; 
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  background-color: #c3c3c3;
}

#input {
  background-color: white; 
  color: black; 
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  background-color: #c3c3c3;
}
  

body {
  background-color: #ffffff;
}
</style>
</head>


<body>

<img src="icon-icecinno.png" alt="ice-cinno pic" width="1500" height="200">

<form name="form" action="" method="POST">
  <table style="width:100%">
  <tr>
    <td><a href="" target="_self">Home</a></td>
    <td><a href="" target="_self">Jury</a></td>
	<td><a href="http://localhost/SDW/manage_equipment/viewequip.php" target="_self">Equipment</a></td>
	<td><a href="" target="_self">Booth</a></td>
	<td><a href="" target="_self">Logout</a></td>
  </tr>
  </table>
  
  <h2>MANAGE EQUIPMENT</h2>
  
  <h4>Add Equipment</h4>
  
  <table style="width:80%">
  <tr>  
    <th>Equipment ID</th>
	<th>Equipment</th>
    <th>Price</th>
    <th>Quantity</th>
  </tr>
  <tr>
	<td><input type="text" name="id" id="input" required></td>
    <td><input type="text" name="equipment" id="input" required></td>
    <td><input type="text" name="price" id="input" required></td>
    <td><input type="text" name="quantity" id="input" required></td>
  </tr>
  </table>
  
  <br><br>
  <center><input type="submit" name="submit" value="ADD" id="add"><center>
</form> 


<br>

<center><form action="viewequip.php" method="post"> 
<input type="submit" value="BACK" id="add">
</form></center>


</body>
</html>
