<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<?php 
include("head.php");
require("header.html");
include ('../Controller/EvaluationController.php');
?>
</head>

<!--=====================
          Content
======================--> 
<div class="wrapper">
<div>
<div align="center">

</div>
</div>
</div>
<div class="container" style="width: 1000px;">
			<div><br>
				<table class="table table-hover">
					<tr class="table-active">
						<th>Place</th>
						<th>Participant ID</th>
						<th>Group Name</th>
						<th>Innovation Product</th>
						<th>Mark</th>
						<th>Remark</th>
						<th>Evaluate By</th>
						<th></th>
					</tr>
					
					  <?php 
					  $i=1;
					  while($row = $allresult->fetch_assoc()){
						
						echo '<tr>';
						echo '<td>'.$i.'</td>';
						
						echo '<td>'.$row['ParticipantID'].'</td>';
						echo '<td>'.$row['GroupName'].'</td>';
						echo '<td>'.$row['InnovationProduct'].'</td>';
						echo '<td>'.$row['Mark'].'</td>';
						echo '<td>'.$row['Remark'].'</td>';
						echo '<td>'.$row['Name'].'</td>';
						echo '</tr>';
						$i++;
					}
					  ?>
						
				</table>
				<button class="btn" name="Print()" onclick="myFunction()">PRINT</button>

<script>
function myFunction() {
  window.print();
  alert("Print successful!");
}
</script>




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

