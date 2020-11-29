<?php
		if(ISSET($_POST['save_admin'])){
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$fname = $_POST['fname']; 
		$sname = $_POST['sname']; 
		$lname = $_POST['lname']; 
		$conn = new mysqli("localhost", "root", "", "nelson");
		$q1 = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$f1 = $q1->fetch_array();
		$c1 = $q1->num_rows;
			if($c1 > 0){
				echo "<script>alert('Username already taken')</script>";
			}else{
				$conn->query("INSERT INTO `admin` VALUES('', '$username', '$password', '$fname', '$sname', '$lname')") or die(mysqli_error());
				header("location: admin.php");
			}				
		}
		
