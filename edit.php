<?php 

require_once 'connect.php';

require_once 'header2.php';

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		// error 
		$sql ="UPDATE users SET fname='doe' WHERE user_id='2'";

		//mysqli_query($conn,"UPDATE users set user_id='" . $_POST['user_id'] . "', email='" . $_POST['email'] . "', mobile='" . $_POST['mobile'] . "', username='" . $_POST['username'] . "' ,email='" . $_POST['email'] . "' WHERE user_id='" . $_POST['user_id'] . "'");	}


			if(mysqli_query($con, $sql)){
				echo "Successfully updated  user";
			}else{
				echo "There was an error while updating user info". mysqli_error($conn);
			}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="fname" value="<?php echo $row['fname']; ?>" class="form-control"><br>
				<label for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="sname" value="<?php echo $row['sname']; ?>" class="form-control"><br>
				<label for="address">Username</label>
				<input type="text"  name="username" id="contact"  value="<?php echo $row['username']; ?>" class="form-control"><br>
				<label for="contact">Email</label> 
				<input type="text"  name="email" id="contact"  value="<?php echo $row['email']; ?>" class="form-control"><br>
				<label for="contact">Mobile</label> 
				<input type="text"  name="mobile" id="contact"  value="<?php echo $row['mobile']; ?>" class="form-control"><br>
				<label for="contact">password_1</label> 
				<input type="text"  name="password_1" id="contact"  value="<?php echo $row['password']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php;
























































































































































































 require_once 'footer.php';