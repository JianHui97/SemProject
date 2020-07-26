<?php
	require 'connection.php';
	include '../Controller/BoothController.php';
	mysqli_select_db($conn, "ims");
	
	 if(isset($_REQUEST['bid'])){
		session_start();
		$_SESSION['bid']= $_GET['bid'];
		$delete = new BoothController();
		$delete->delete($_SESSION['bid']);
		
	} 
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
	p{
		position: absolute;
		right: 5px;
		
	}
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	.button2 {
	  display: inline-block;
	  padding: 15px 25px;
	  font-size: 24px;
	  cursor: pointer;
	  text-align: center;
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color: blue;
	  border: none;
	  border-radius: 5px;
	  box-shadow: 0 9px #999;
	}

	.button2:hover {background-color: #3e8e41}

	.button2:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
	.button3 {
	  display: inline-block;
	  padding: 15px 25px;
	  font-size: 24px;
	  cursor: pointer;
	  text-align: center;
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color: red;
	  border: none;
	  border-radius: 5px;
	  box-shadow: 0 9px #999;
	}

	.button3:hover {background-color: #3e8e41}

	.button3:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
	</style>
</head>

		<header class="header">
			<?php include("header1.php")?>
		</header>
			<br>
				<p><input type="button" class="button" value="Allocate booth" onclick="window.location.href='ParticipantList.php'"></p>
			<br>
			<br>
			<h2>All occupied booths</h2>
			<?php
				$query="SELECT booth.BoothID, 
					booth.BoothLocation,
					booth.ParticipantID, 
					participants.GroupName, 
					participants.InnovationProduct
					FROM booth
					INNER JOIN participants 
					ON booth.ParticipantID = participants.ParticipantID;"; 
				
				$result=mysqli_query($conn,$query);
				if($result == FALSE)
				{die(mysqli_error($conn));}
			
					echo'<table class="table table-hover>';
					echo'<tr class="table-active">';
					echo'<th>Booth ID</th>';
					echo'<th>Booth Location</th>';
					echo'<th>Participant ID</th>';
					echo'<th>Group Name</th>';
					echo'<th>Innovation</th>';
					echo'<th></th>';
					echo'<th></th>';
					echo'</tr>';
					while($row=mysqli_fetch_assoc($result))
					{
						echo"<tr>
		
						<td>".$row['BoothID']."</td>
						<td>".$row['BoothLocation']."</td>
						<td>".$row['ParticipantID']."</td>
						<td>".$row['GroupName']."</td>
						<td>".$row['InnovationProduct']."</td>"
			?>
						<td><input type="button" class="button2" value="Update" onclick="window.location.href='BoothUpdateForm.php?bid=<?php echo $row['BoothID'] ?>&bloc=<?php echo $row['BoothLocation']?>&pid=<?php echo $row['ParticipantID']?>'"></td>
						<td><input type="button" class="button3" name="delete" value="Delete" onclick="window.location.href='BoothView.php?bid=<?php echo $row['BoothID'] ?>'"></td>
						</tr>
					<?php 
					}
					echo '</table>';
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