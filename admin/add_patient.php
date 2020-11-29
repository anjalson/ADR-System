<?php
// initializing variables
$patient_no = "";
	if(ISSET($_POST['save_patient'])){
		$patient_no = $_POST['patient_no'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$birthdate = $_POST['month']."/".$_POST['day']."/".$_POST['year'];
		$age = $_POST['age'];
		$civil_status = $_POST['civil_status'];
		$gender = $_POST['gender'];

		
		$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
		$q1 = $conn->query("SELECT * FROM `patient` WHERE `patient_no` = '$patient_no'") or die(mysqli_error());
		$c1 = $q1->num_rows;
		if($c1 > 0){
				echo "<script>alert('Patient should be same, change and try again')</script>";
		}else{
			$conn->query("INSERT INTO `patient` VALUES('$patient_no','$firstname','$lastname', '$birthdate', '$age','$civil_status', '$gender')") or die(mysqli_error());
			//header("location: patient.php");	
		}
	}
	