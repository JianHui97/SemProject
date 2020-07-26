<?php

require_once '../controller/manage_equipment_controller/reserve_con.php';	

$viewcartEMS = new controller();
$view = $viewcartEMS->viewing();

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

input {
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
  

body {
  background-color: #ffffff;
}
</style>
</head>

<body>

<img src="icon-icecinno.png" alt="ice-cinno pic" width="1500" height="200">

<form name="form" action="" method="POST">
  <table style="width:100%" id="table1">
  <tr>
    <td><a href="" target="_self">Home</a></td>
    <td><a href="http://localhost/SDW/manage_equipment/bookequip.php" target="_self">Equipment</a></td> 
	<td><a href="" target="_self">Logout</a></td>
  </tr>
  </table>
  
  <h2>BOOKING EQUIPMENT</h2>
  
  <h4>Reserve Cart</h4>
  
  <table style="width:80%">
  <tr>
    <th>NO.</th>
	<th>Equipment ID</th>
    <th>Equipment</th>
    <th>Quantity</th>
  </tr>
  <?php
  $i=1;
  foreach($view as $row)
  { ?>
  <?php echo "<tr>"; ?>
  <?php echo "<td>".$i."</td>"; ?>
  <?php echo "<td>".$row['id']."</td>"; ?>
  <?php echo "<td>".$row['equipment']."</td>"; ?>
  <?php echo "<td>".$row['quantity']."</td>"; ?>
  <?php echo "</tr>"; ?>
  <?php $i++;
  }
  ?>
  </table>
  
</form> 

<br>

<form action="editbook.php" method="post"> 
<input type="submit" value="EDIT BOOKING">
</form>

<form action="deletebook.php" method="post"> 
<input type="submit" value="DELETE BOOKING">
</form>

<br>

<center><form action="bookequip.php" method="post"> 
<input type="submit" value="BACK">
</form></center>

</body>
</html>
