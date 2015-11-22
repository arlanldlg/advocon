<html>
	<title><?php echo $title;?></title><?php
	session_start();
			$email = $_SESSION["userEmail"];
			$usertype = $_SESSION["userType"];
			$userID = $_SESSION["userID"];
	
	if ($email ==NULL)
			header("location:login.php?e=l");?>
	<link rel="shortcut icon" href="favicon.ico" />
	
	
	