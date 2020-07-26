<?php
	require 'connection.php';
	require '../Controller/BoothController.php';
	mysqli_select_db($conn, "ims");
	session_start();
	
		/* $booth_id = $_GET['bid'];
		$query = "SELECT * FROM booth WHERE BoothID='$booth_id' ";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_fetch_row($result);	 */
		if(isset($_GET['bid'])){
			$_SESSION['bid'] = $_GET['bid'];
			$_SESSION['bloc'] = $_GET['bloc'];
			$_SESSION['pid'] = $_GET['pid'];
		}

		if (isset($_POST['ok'])) {
			$update = new BoothController();
			$update->update($_POST['bid'],$_POST['bloc'],$_POST['pid']);
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
		<h2><center>Enter the new information</center></h2>
		<form name ="addpackage" method ="post" action="" onsubmit="">
			<table>
				<tr>
					<td>Booth ID</td><td><input type="text" name="bid"  readonly value="<?php echo $_SESSION['bid']; ?>"></td>
				</tr>
				<tr>
					<td>Booth Location</td><td><Select name="bloc" selected="<?php echo $_SESSION['bloc']; ?>">
													<option value = "A">A</option>
													<option value = "B">B</option>
													<option value = "C">C</option>
													<option value = "D">D</option>
												</select>
					</td>
				</tr>
				<tr>
					<td>Participant ID</td><td><input type="text" name="pid"  readonly value="<?php echo $_SESSION['pid']; ?>" ></td>
				</tr>
				<tr>
					<td><input type="submit" class="button" name="ok" value="Ok"></td>
					<td><input type="button" class="button2" value="Cancel" onclick="window.location.href='BoothView.php'"></td>
				</tr>

			</table>
		</form>
		</center></div>
	</div>
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