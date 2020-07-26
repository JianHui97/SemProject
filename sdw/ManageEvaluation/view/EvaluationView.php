<?php
	include("head.php"); 
	include("header.html");
include ('../Controller/EvaluationController.php');
?>

<div class="container" style="width: 1000px;">
<h2 style="margin-left: 40px; font-size: 40px; text-decoration-line: underline; text-decoration-style: double;">Evaluation</h2>
					 <table class="table table-hover">
					<tr class="table-active">
						<th>Evaluation ID</th>
						<th>Marks</th>
						<th>Remarks</th>
						<th>ParticipantID</th>
						<th></th>
					</tr>
					  <?php 
					  while($row = $evaluation->fetch_assoc()){
						echo '<tr>';
						echo '<td>'.$row['EvaluarionID'].'</td>';
						echo '<td>'.$row['Mark'].'</td>';
						echo '<td>'.$row['Remark'].'</td>';
						echo '<td>'.$row['ParticipantID'].'</td>';
						echo '</tr>';
					}
					  ?>
					  </table>
					  <form action="JuryListView.php" style="margin-top:15%">
						<input type="submit" name="Back()" value="BACK" class="btn btn-outline-info"/>
					   </form>