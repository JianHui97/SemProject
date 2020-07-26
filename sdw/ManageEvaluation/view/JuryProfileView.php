<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<?php 
include("head.php");
require("header.html");
set_include_path('../Controller/EvaluationController.php');
include ('../Controller/EvaluationController.php');
?>
</head>
<script>
function goBack() {
  window.history.back();
}
</script>
<!--=====================
          Content
======================-->
<class 
<div class="content">
<form action="../Controller/EvaluationController.php" method="post">
	<h2 style="margin-left: 40px; font-size: 40px; text-decoration-line: underline; text-decoration-style: double;">Jury Profile</h2>
	<br>
		<div class="container" style="margin-left: 50px;">
				<div class="row">
				      <div class="col-sm-6"><label>ID:</label><input type="text" name="JuryID" readonly value="<?php echo $_GET['JuryID'];?>"></div>
				      <div class="col-sm-6"><label>NAME:</label><input type="text" name="Name"  value="<?php echo $_GET['Name'];?>"></div>
				    </div>
					<br><br>
				<div class="row">
				      <div class="col-sm-6"><label>AGE:</label><input type="text" name="Age"  value="<?php echo $_GET['Age'];?>"></div>
				      <div class="col-sm-6"><label>GENDER:</label><input type="text" name="Gender"  value="<?php echo $_GET['Gender'];?>"></div>
				    </div>
					<br><br>
					<div class="row">
				      <div class="col-sm-6"><label>CONTACT:</label><input type="text" name="Contact"  value="0<?php echo $_GET['Contact'];?>"></div>
				      <div class="col-sm-6"><label>USERNAME:</label><input type="text" name="Username" disabled value="<?php echo $_GET['Username'];?>"></div>
				    </div>
					<br><br>
					<div class="row">
				      <div class="col-sm-6"><label>EMAIL:</label><input type="text" name="Email" disabled value="<?php echo $_GET['Email'];?>"></div>
					  <div class="col-sm-6"><label>PASSWORD:</label><input type="text" name="Password" disabled  value="<?php echo $_GET['Password'];?>"></div>
					<br><br>
					<div class="row">
					<div class="col-sm-12">
					<input type="text" hidden value="EditJury" name="method">
					<input type="submit" class="btn btn-outline-info"  value="CHANGE"></div>
					</div></div>
					</div>
		</div>
</form>
					<form action="EvaluationView.php" action="get">
					<input type="text" name="JuryID" hidden value="<?php echo $_GET['JuryID'];?>">
                    <input type="submit" name="ViewEvaluation()" value="CHECK EVALUATION" class="btn btn-outline-info"/>
					</form>
<div class="row">
				    <div class="col-sm-12" style="margin-left: 10px;"><input onclick="goBack()" name="Back()" class="btn btn-success" value="BACK"></div>



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

