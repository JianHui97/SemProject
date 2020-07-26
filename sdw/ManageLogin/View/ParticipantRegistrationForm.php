<?php
	require '../connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Participant Registration</title>
	<?php include("head.php"); ?>
	<script>
		function disableSubmit() {
			document.getElementById("register").disabled = true;
		}

		function activateButton(element) {

			if(element.checked) {
				document.getElementById("register").disabled = false;
			}
			else  {
				document.getElementById("register").disabled = true;
			}

		}
	</script>
</head>

<body onload="disableSubmit()">
	<div class="wrapper">
		<header class="header">
			<?php include("header1.php")?>
		</header>
		<div class="content" style="margin-top: 50px;">
			<form action="/sdw/ManageLogin/Controller/registerController.php?registerAs=participant" method="POST" style="margin: 0 auto; width: 700px; border-style: outset; border-radius: 25px; border-width: 5px; border-color: grey;" autocomplete="off">
				<br><br><center><div class="imgcontainer">
					<img src="images/participant.png" width="100px" height="100px">
					<a href="/sdw/ManageLogin/View/CommitteeRegistrationForm.php"><img src="images/staff.png" width="100px" height="100px"></a>
					<a href="/sdw/ManageLogin/View/JuryRegistrationForm.php"><img src="images/jury.png" width="100px" height="100px"></a>
				</div></center>
				<div class="form-title" align="center">
					<h2>Participant Registration</h2>
				</div>
				<div class="container" style="width: 100%;">
					<center><table colspan="4" style="text-align:left">
<tr>
<th> Group </th><td><input type="text" name="groupname" placeholder="Enter group name" required></td>
</tr>
<tr>
<th> Innovation Product </th><td><input type="text" name="product" placeholder="Enter innovation product" required></td>
</tr>
<tr>
<th style="color:black"> Members </th>
</tr>
<tr>
<th> Name </th><th>Age</th><th>Gender</th><th>Contact Number</th>
<tr>
<td><input type="text" name="mem_name[]" placeholder="Enter name" required></td>
<td><input type="number" name="mem_age[]" required></td>
<td>
	<select class="custom-select" name="mem_gender[]">
	    <option selected hidden>Select gender</option>
		<option value="Male">Male</option>
	    <option value="Female">Female</option>
	</select>
</td><td><input type="text" name="mem_contact[]" placeholder="Enter contact number" required></td>
</tr>
<tr>
<td><input type="text" name="mem_name[]" placeholder="Enter name" required></td>
<td><input type="number" name="mem_age[]" required></td>
<td>
	<select class="custom-select" name="mem_gender[]">
	    <option selected hidden>Select gender</option>
		<option value="Male">Male</option>
	    <option value="Female">Female</option>
	</select>
</td><td><input type="text" name="mem_contact[]" placeholder="Enter contact number" required></td>
</tr>
<tr>
<td><input type="text" name="mem_name[]" placeholder="Enter name" required></td>
<td><input type="number" name="mem_age[]" required></td>
<td>
	<select class="custom-select" name="mem_gender[]">
	    <option selected hidden>Select gender</option>
		<option value="Male">Male</option>
	    <option value="Female">Female</option>
	</select>
</td><td><input type="text" name="mem_contact[]" placeholder="Enter contact number" required></td>
</tr>
<tr>
<td><input type="text" name="mem_name[]" placeholder="Enter name" required></td>
<td><input type="number" name="mem_age[]" required></td>
<td>
	<select class="custom-select" name="mem_gender[]">
	    <option selected hidden>Select gender</option>
		<option value="Male">Male</option>
	    <option value="Female">Female</option>
	</select>
</td><td><input type="text" name="mem_contact[]" placeholder="Enter contact number" required></td>
</tr>
<tr>
<td><input type="text" name="mem_name[]" placeholder="Enter name" required></td>
<td><input type="number" name="mem_age[]" required></td>
<td>
	<select class="custom-select" name="mem_gender[]">
	    <option selected hidden>Select gender</option>
		<option value="Male">Male</option>
	    <option value="Female">Female</option>
	</select>
</td><td><input type="text" name="mem_contact[]" placeholder="Enter contact number" required></td>
</tr>
<tr>
<th> Username </th><td><input type="text" name="partusername" placeholder="Enter username" required></td>
</tr>
<tr>
<th> E-mail </th><td><input type="email" name="partemail" placeholder="Enter e-mail" required></td>
</tr>
<tr>
<th> Password </th><td><input type="text" name="partpassword" placeholder="Enter password" required></td>
</tr>
<tr>
<th> Confirm Password </th><td><input type="text" name="partcfmpassword" placeholder="Enter confirm password" required></td>
</tr>
</table></center>
				</div>
				<br>
	       		<div align="center" style="margin-bottom: 15px;">
					<input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree Terms & Coditions
	       		</div>
	       		<div align="center" style="margin-bottom: 30px;">
	      			<button name="register" id="register" class="btn btn-info" type="submit" style="width: 370px;">Register</button>
	      		</div>
			</form>
		</div>
		<footer class="footer">
		<br>
			<?php
				include("footer.php");
			?>
		<br>
		</footer>
		
	</div>

<script>
  var password = document.getElementById("password")
  var confirm_password = document.getElementById("cfmpassword");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
	
  }
  
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>