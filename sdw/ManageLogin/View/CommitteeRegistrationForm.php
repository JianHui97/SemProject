<?php
	require '../connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Committee Registration</title>
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
			<form action="/sdw/ManageLogin/Controller/RegisterController.php?registerAs=committee" method="POST" style="margin: 0 auto; width: 500px; border-style: outset; border-radius: 25px; border-width: 5px; border-color: grey;" autocomplete="off">
				<br><br><center><div class="imgcontainer">
					<img src="images/staff.png" width="100px" height="100px">
					<a href="/sdw/ManageLogin/View/JuryRegistrationForm.php"><img src="images/jury.png" width="100px" height="100px"></a>
					<a href="/sdw/ManageLogin/View/ParticipantRegistrationForm.php"><img src="images/participant.png" width="100px" height="100px"></a>
				</div></center>
				<div class="form-title" align="center">
					<h2>Committee Registration</h2>
				</div>
				<div class="container" style="width: 400px;">
					<label for="name"><b>Name</b></label>
	     	 		<input type="text" class="form-control" placeholder="Enter name" name="name" required>
					<br><br>
					<label for="age"><b>Age</b></label>
	     	 		<input type="number" class="form-control" placeholder="Enter age" name="age" required>
	     	 		<br><br>
					<label for="contact"><b>Contact Number</b></label>
	     	 		<input type="text" class="form-control" placeholder="Enter contact number" name="contact" required>
					<br><br>
	     	 		<label for="gender" style="margin-top: 10px;"><b>Gender</b></label><br>
	      			<select class="custom-select" name="gender">
	      				<option selected hidden>Select gender</option>
	      				<option value="Male">Male</option>
	      				<option value="Female">Female</option>
	      			</select>
					<br><br>
					<label for="username"><b>Username</b></label>
	     	 		<input type="text" class="form-control" placeholder="Enter username" name="username" required>
					<br><br>
					<label for="email"><b>E-mail</b></label>
	     	 		<input type="email" class="form-control" placeholder="Enter email" name="email" required>
					<br><br>
	     	 		<label for="password" style="margin-top: 10px;"><b>Password</b></label>
	      			<input type="password" class="form-control" placeholder="Enter password" name="password" id="password" required>
	      			<br><br>
	      			<label for="cfmpassword"><b>Confirm Password</b></label>
	      			<input type="password" class="form-control" placeholder="Confirm password" name="cfmpassword" id="cfmpassword" required>
				</div>
				<br>
	       		<div style="margin-left: 62px; margin-bottom: 15px;">
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