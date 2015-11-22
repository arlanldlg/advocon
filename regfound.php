<html>
	<title>ADVOcon</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href = "css/style.css">
	
	
	<center>
			<a href=login.php><img src=logo.png width=1000px><br></a>
			<h1>Register</h1>
			<font color = "red"><h3><?php
			error_reporting(0);
			$e = $_GET['e'];
			if( $e == "p"){
				echo "Passwords do not match";
			}elseif($e=="u"){
				echo"User already exists";
			}
			
			
			
			?></h3></font>
			<div class="form_container">
			 <form action="regfoundprocess.php" method="post">
				Email address: <input type="text" name="eAdd" required="required" class="one-col-input"/><br>
				Password: <input type="password" name="memberPassword" required="required" class="one-col-input" /> <br/>
				Confirm Password: <input type="password" name="confirmPassword" required="required" class="one-col-input" /> <br/>					
				Foundation Name: <input type="text" name="foundname" required="required" class="one-col-input"/><br>
				Advocacy: <input type="text" name="advoc" required="required" class="one-col-input"/><br>
				City: <input type="text" name="location" required="required" class="one-col-input"/><br>
				Region:<br>
		<select name="region" id = "region">
	<option></option>
	<option value="NCR">NCR</option>
	<option value="CAR">CAR</option>
	<option value="I">I</option>
	<option value="II">II</option>
	<option value="III">III</option>
	<option value="IV-A">IV-A</option>
	<option value="IV-B">IV-B</option>
	<option value="V">V</option>
	<option value="VI">VI</option>
	<option value="NIR">NIR</option>
	<option value="VII">VII</option>
	<option value="VIII">VIII</option>
	<option value="IX">IX</option>
	<option value="X">X</option>
	<option value="XI">XI</option>
	<option value="XII">XII</option>
	<option value="XIII">XIII</option>
	<option value="ARMM">ARMM</option>
	
</select><br>
				Mobile Number (PH): <input type="text" name="mobile" required="required" class="one-col-input"/><br>
				<br>
				<input type="submit" value="Register" class="button"/><br>
				<a href='register.php'>Register as a Member</a><br>
				<a href=login.php>Already a member?</a>
			</form>