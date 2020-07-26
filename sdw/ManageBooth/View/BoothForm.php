<?php
	require 'connection.php';
	require '../Controller/BoothController.php';
	mysqli_select_db($conn, "ims");

	$participants_id = $_GET['pid'];
		$query = "SELECT * FROM participants WHERE ParticipantID='$participants_id' ";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_fetch_row($result);	

		if (isset($_POST['done'])) {
			$insert = new BoothController();
			$insert->insert($_POST['pid'],$_POST['bloc']);
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
	</style>
</head>

		<header class="header">
			<?php include("header1.php")?>
		</header>
		<div><center>
		<h2>Select a booth location</h2>
		<br>
			<form  method ="post" action="" onsubmit="">
			<table >
				<tr>
					<td>Participant ID</td><td><input type="text" name="pid"  readonly value="<?php echo $rows[0]; ?>"></td>
				</tr>
				<tr>
					<td>Group Name</td><td><input name="gn" readonly value="<?php echo $rows[1]; ?>"></td>
				</tr>
				<tr>
					<td>Innovation Product</td><td><input type="text" name="inno"  readonly value="<?php echo $rows[2]; ?>" ></td>
				</tr>
				<tr>
					<td>Booth Location</td><td><Select name="bloc" >
													<option value = "A">A</option>
													<option value = "B">B</option>
													<option value = "C">C</option>
													<option value = "D">D</option>
												</select>
					</td>
				</tr>
				<tr><td>-----------</td><td>  -----------      </td></tr>
				<tr>
					<td><input type="submit" class="button" name="done" value="Done"></td>
					<td><input type="button" class="button2" value="Cancel" onclick="window.location.href='BoothView.php'"></td>
				</tr>

			</table>
		</form>
		</center></div>
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