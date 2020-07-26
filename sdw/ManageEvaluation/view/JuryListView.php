<?php 
	include("head.php"); 
	include("header.html");
	include ('../Controller/EvaluationController.php');
?>

<!--=====================
          Content
======================-->


<div class="container" style="width: 1000px;">
			<div><br>
			<table class="table table-hover">
					<tr class="table-active">
						<th>ID</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th></th><th></th>
					</tr>
					<tr>
		<?php 
    		while($row = $alljury->fetch_assoc()){
    			echo '<tr>';
    			echo '<td>'.$row['JuryID'].'</td>';
    			echo '<td>'.$row['Name'].'</td>';
    			echo '<td>0'.$row['Contact'].'</td>';
				echo '<td>'.$row['Email'].'</td>';
    			echo '<td><a name="ViewProfile()" href=../view/JuryProfileView.php?JuryID='.$row['JuryID'].'&Name='.urlencode($row['Name']).'&Age='.$row['Age'].'&Gender='.$row['Gender'].'&Contact='.$row['Contact'].'&Username='.$row['Username'].'&Email='.$row['Email'].'&Password='.$row['Password'].'>View Profile</a></td>';
				echo '<td><a href=../controller/EvaluationController.php?dlt_id='.$row['JuryID'].'" onclick="return confirm(\'Really delete?\');";>Delete</a></td>';
    			echo '</tr>';
    		}

    	?>
</div>

<!--==============================
              footer
=================================-->
</div>
</body>
</html>

