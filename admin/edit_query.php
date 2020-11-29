<?php
	$id = $_GET['id'];
	$last = $_GET['lname'];
	
		if(ISSET($_POST['edit_admin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$sname = $_POST['sname'];
			$lname = $_POST['lname'];
			$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
			$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `fname` = '$fname', `sname` = '$sname', `lname` = '$lname' WHERE `admin_id` = '$id'") or die(mysqli_error());
			header("location: admin.php");
		}
	if(ISSET($_POST['edit_user'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email= $_POST['email'];
			$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
			$conn->query("UPDATE `users` SET `username` = '$username', `password` = '$password', `fname` = '$fname', `lname` = '$lname', `email` = '$email' WHERE `id` = '$id'") or die(mysqli_error());
			header("location: user.php");
		}	
