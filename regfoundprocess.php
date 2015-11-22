<?php
require 'db.php';

$eadd = $_POST['eAdd'];
$pword = $_POST['memberPassword'];
$cpword = $_POST['confirmPassword'];
$found = $_POST['foundname'];
$advoc = $_POST['advoc'];
$location = $_POST['location'];
$region = $_POST['region'];
$mobile = $_POST['mobile'];
$cquery = "SELECT `userEmail` FROM `user`";
	$result = mysqli_query($conn,$cquery);
		while($row = $result -> fetch_assoc())		
		if($row["userEmail"] == $eadd){
			header("location:regfound.php?e=u");
		}
	if($pword == $cpword){
		$q2 = "INSERT INTO `advocon`.`user` (`userEmail`, `userPassword`,`userType`) VALUES ('$eadd','$pword','Found');";
		$r2 = mysqli_query($conn,$q2);
		$q1 = "SELECT `userID` FROM `user` WHERE `userEmail` LIKE '$eadd';";
	$r1 = mysqli_query($conn,$q1);
	if($r1 -> num_rows > 0)
		while($row = $r1 -> fetch_assoc()){
		$f = $row["userID"];}
		$q2 = "INSERT INTO `advocon`.`foundation` (`foundUserID`, `foundName`, `foundAdvoc`, `foundEmail`, `foundLocation`, `foundRegion`, `foundMobile`) VALUES ('$f', '$found', '$advoc', '$eadd', '$location', '$region', '$mobile');";
		mysqli_query($conn,$q2);
		header("location:login.php?e=s");
	
	}else {
	header("location:register.php?e=p");
	}


?>