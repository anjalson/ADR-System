<?php
	if(ISSET($_POST['save_user'])){	
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$fname = $_POST['fname']; 
		$lname = $_POST['lname']; 
		$email = $_POST['email']; 
		$conn = new mysqli("localhost", "root", "", "nelson");
		$q1 = $conn->query("SELECT * FROM `users` WHERE `username` = '$username'") or die(mysqli_error());
		$f1 = $q1->fetch_array();
		$c1 = $q1->num_rows;
			if($c1 > 0){
				echo "<script>alert('Username already taken')</script>";
			}else{
				$conn->query("INSERT INTO `users` VALUES('', '$username', '$password', '$fname', '$lname', '$email')");
				header("location: users.php");
			}
	}
		
