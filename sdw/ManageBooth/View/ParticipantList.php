<?php
	require 'connection.php';
	mysqli_select_db($conn, "ims");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booth</title>
	<?php 
		include("head.php"); 
		include("head2.php");
	?>	
	<style>
	.button {
	  display: inline-block;
	  padding: 15px 25px;
	  font-size: 24px;
	  cursor: pointer;
	  text-align: center;
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color: #4CAF50;
	  border: none;
	  border-radius: 10px;
	  box-shadow: 0 9px #999;
	}

	.button:hover {background-color: #3e8e41}

	.button:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
	</style>
</head>

		<header class="header">
			<?php include("header1.php")?>
		</header>
				<h2>Select a participants group</h2>
			<?php
				$query="SELECT * FROM participants";
				if($result=mysqli_query($conn,$query))
				{
					echo'<table class="table table-hover>';
					echo'<tr class="table-active">';
					echo'<th>Participants ID</td>';
					echo'<td>Participant Group</td>';
					echo'<td>Innovation </td>';
					echo'<th></th>';
					echo'</tr>';
					while($row=mysqli_fetch_row($result)){
						echo'<tr>';
						?>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><input type="button" class="button" value="Allocate booth" onclick="window.location.href='BoothForm.php?pid=<?php echo $row[0]; ?>.php'"></td>
						</tr>
						<?php
					}
				}
				echo"</table>";
			?>
		<footer class="footer">
		<br>
			<?php
				include("footer.php");
			?>
		<br>
		</footer>
		
	</div>


</body>
</html>