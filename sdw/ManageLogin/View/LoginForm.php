<?php
	require '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<?php
		include("head.php");
	?>
</head>
	<div class="wrapper">
	<header class="header">
		<?php 
			include("header.php");
			
		;?>
	</header>
	</div>
<style>
table
{
	padding-top: 20px;
	font-size: 20px;
	color: black;
}
h1
{
	font-size:30px;
	font-family:verdana;
}
a
{
	color:blue;
}
</style>
 <body>  
 <form action="/sdw/ManageLogin/Controller/LoginController.php" method="POST">
 <br><br>
 <h1 align="center">LOGIN</h1>
 <br><br>
      <center><table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
          <td>
            Select category: </td>
          <td><select name="category" id="category" required>
              <option value="committee">Committee</option>
              <option value="jury">Jury</option>
              <option value="participant">Participant</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="login" value="Login"></td>
          <td></td>
        </tr>
		</table></center>
		<center><a href="index.php">Cancel</a></center>
    </form>
 </body>
 <footer class="footer">
		<br>
		<?php
			include("footer.php");
		?>
		<br>
	</footer>
	</div>
</html>
