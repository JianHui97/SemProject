<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<?php 
	include("head.php"); 
	include("header2.html");
	include ('../Controller/EvaluationController.php');
?>

<!--=====================
          Content
======================-->
<div class="content">
<form action="../controller/EvaluationController.php" method="POST">
<h2 style="margin-left: 40px; font-size: 40px; text-decoration-line: underline; text-decoration-style: double;">EVALUATION FORM</h2>
<div class="container" style="margin-left: 50px;">
				    <div class="row">
				      <div class="col-sm-6"><label>GROUP:</label><select name='ParticipantID'>
																			<option hidden>group - product</option>
																			<?php 
																				while($row = $listid->fetch_assoc()){
																				echo '<option value="'.$row['ParticipantID'].'">' .$row['GroupName'].' - '.$row['InnovationProduct']. '</option>';
																			}
																			?>
																			</select>
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>Give Marks:</label><input class="form-control" type="text" name="Mark" required>
					  </div></div>
					  <div class="row">
				      <div class="col-sm-6"><label>Give Remarks:</label><input class="form-control" type="text" name="Remark" required>
					  </div></div>
					  					  <div class="row">
				      <div class="col-sm-6"><label>Jury ID:</label><input class="form-control" type="text" name="JuryID" required>
					  </div></div>
					  <div class="row">
				    	<div class="col-sm-12">
						<input type="text" hidden value="AddEvaluation" name="method">
						<input type="submit" name="AddEvaluation()" class="btn btn-success"  value="Submit"></div>
				    </div></div>

					  
			</form>

<!--==============================
              footer
=================================-->
</div>
</div>
</body>
</html>