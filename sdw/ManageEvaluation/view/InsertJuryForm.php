<!DOCTYPE html>

<html lang="en">
<head>
<title>Home</title>
<?php 
include("head.php"); 
require("header.html");

?>

<!--=====================
          Content
======================-->

  
<div class="content">
<form action="../controller/EvaluationController.php" method="POST">
	<h2 style="margin-left: 40px; font-size: 40px; text-decoration-line: underline; text-decoration-style: double;">Create Jury Form</h2>
			<div class="container" style="margin-left: 50px;">
				    <div class="row">
				      <div class="col-sm-6"><label>NAME:</label><input class="form-control" type="text" name="Name" required>
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>AGE:</label><input type="text" name="Age" required>
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>GENDER:</label>&nbsp;&nbsp;&nbsp;<input type="radio" name="Gender" value="Male" required>Male &nbsp;&nbsp;&nbsp;<input type="radio" name="Gender" value="Female">Female
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>PHONE NUMBER:</label><input type="text" name="Contact" required>
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>EMAIL ADDRESS:</label><input class="form-control" placeholder="Example : aaa@mail.com" type="email" name="Email" required>
					  </div></div>
					<div class="row">
				    	<div class="col-sm-12">
						<input type="reset" name="reset" class="btn btn-warning" value="Reset">&nbsp &nbsp &nbsp
						<input type="text" hidden value="AddJury" name="method">
						<input type="submit" name="AddJury()" class="btn btn-success"  value="Submit"></div>
				    </div></div>
			</form>
<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
         <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
          </div>
         <div class="copyright"><div class="color2"><strong>Arch</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a></div>
          Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
          </div>
      </div>
    </div>
  </div>  
</footer>
</body>
</html>

