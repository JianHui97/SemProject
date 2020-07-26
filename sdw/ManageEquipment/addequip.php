<?php

require_once '../controller/manage_equipment_controller/equipment_con.php';	

if (isset($_POST['submit'])) {
  $addequipEMS = new controller();
  // call method dd

  $addequipEMS->addequip();
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Equipment Approval</title>
<?php include("head.php"); ?>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images1/favicon.ico">
<link rel="shortcut icon" href="images1/favicon.ico" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/owl.carousel.js"></script>

<style>
  
  .a{ 

  font-style: normal;
  font-size: 28px;
  text-align:left;
  width:150px;
  height:50px;
  }
  
  .b{ 

  font-style: normal;
  font-size: 28px;
  font-weight:bold;
  text-align:left;
  width:150px;
  height:50px;
  }
  
  .c{
  font-style: normal;
  font-size: 20px;
  text-align:left;
  width: 150px;
  height: 30px;
  }

  .d{
  padding: 10px 18px;
  text-align: center;  
  font-size: 15px;
  cursor: pointer;
  }

  .e{ 
  padding: 10px 38px;
  text-align: center;  
  font-size: 15px;
  cursor: pointer;
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