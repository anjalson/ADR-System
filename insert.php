<?php 

require_once 'connect.php';

require_once 'header2.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['fname']) || empty($_POST['sname']) || empty($_POST['username']) ||empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['password_1']) ){
			echo "Please fillout all required fields"; 
		}else{		
			$fname  = $_POST['fname'];
			$sname 	= $_POST['sname'];
			$username 	= $_POST['username'];
			$email 	= $_POST['email'];
			$mobile 	= $_POST['mobile'];
			$password_1  	= $_POST['password_1'];
			$sql = "INSERT INTO users(fname,sname,username,email,mobile, password_1) 
		    VALUES('$fname','$sname','$username','$email','$mobile','$password_1')";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully added new user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
			}
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> 
			<form action="" method="POST">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="fname" class="form-control"><br>
				<label for="lastname">Lastname</label>
				<input type="text"  name="sname" id="lastname" class="form-control"><br>
				<label for="address">Username</label>
				<input type="text"  name="username" id="contact" class="form-control"><br>
				<label for="contact">Email</label> 
				<input type="text"  name="email" id="contact" class="form-control"><br>
				<label for="contact">Mobile</label> 
				<input type="text"  name="mobile" id="contact" class="form-control"><br>
				<label for="contact">Password</label> 
				<input type="text"  name="password_1" id="contact" class="form-control"><br>
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';