<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email2 = $_POST['email2'];
	 $phone = $_POST['phone'];
	 $priority = $_POST['priority'];
	 $type = $_POST['type'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO contact (name, email2, phone, priority, type, message)
	 VALUES ('$name','$email2','$phone','$priority','$type','$message')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
