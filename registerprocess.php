<?php
require 'db.php';
$eadd = $_POST['eAdd'];
$pword = $_POST['memberPassword'];
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$bdate = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
$location = $_POST['location'];
$mobile = $_POST['mobile'];
$cpword = $_POST['confirmPassword'];
$cquery = "SELECT `userEmail` FROM `user`";
	$result = mysqli_query($conn,$cquery);
	if($result -> num_rows > 0)
		while($row = $result -> fetch_assoc()){		
		if($row["userEmail"] == $eadd){
			header("location:register.php?e=m");
		}
		}
	if($pword == $cpword){	
	
		$query = "INSERT INTO `advocon`.`user` (`userLname`, `userFname`, `userBdate`, `userLocation`, `userEmail`, `userPassword`, `userMobile`, `userType`) VALUES ('$lname', '$fname', '$bdate', '$location', '$eadd', '$pword', '$mobile', 'User');";
		mysqli_query($conn,$query);
		header("location:login.php?e=s");
		
		
	
	
	}else {
	header("location:register.php?e=p");
	}

			

?>