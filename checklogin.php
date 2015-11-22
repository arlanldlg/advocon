<?php

require 'db.php';
	
	$email=$_POST["username"];
	$password=$_POST["password"];
	
	$query = "SELECT * FROM `user` WHERE `userEmail` = '$email';";
	$result = mysqli_query($conn,$query);
	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
		if($row["userPassword"] == $password){
			session_start();
			$_SESSION["userEmail"] = $email;
			$_SESSION["userType"] = $row["userType"];
			$_SESSION["userID"] = $row['userID'];
			
			if($_SESSION["userType"] == User)
			header("location: home.php");
			if($_SESSION["userType"] == Found)
			header("location: foundhome.php");
			if($_SESSION["userType"] == Admin)
			header("location: adminhome.php");
		}else{
			header("location:login.php?e=n");
		}	
		}
	}else{
	header("location:login.php?e=n");
	}

?>