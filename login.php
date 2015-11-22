<html>
	<title>ADVOcon</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href = "css/style.css">
	
	
	<center>
			<a href=login.php><img src=logo.png width=1000px><br></a>
		<font color = "red"><h3><?php
			error_reporting(0);
			$e = $_GET['e'];
			if( $e == "n"){
				echo "Invalid credentials";
			}elseif($e == "l"){
				echo "Log in first";
			}elseif($e == "s"){
				echo "Successfully Registered!";
			}
			?></h3></font>
			<div class="form_container">
			<form action="checklogin.php" method="post">
		<input type="text" class="two-col-input" name="username" id="username" placeholder="Username" required="required"/><br>
		<input type="password" class="two-col-input" name="password" id="password" placeholder="Password" required="required"/>
			<input type="submit" class = "button" value="Log in"/><br>
			<a href=register.php>Not yet a member?</a>
			</form>
	</center>
<?php
require 'footer.php';

?>