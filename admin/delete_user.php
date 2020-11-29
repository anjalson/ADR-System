<?php
	$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
	$conn->query("DELETE FROM `users` WHERE `id` = '$_GET[id]' && `lname` = '$_GET[lname]'") or die(mysqli_error());
	header("location:user.php");

