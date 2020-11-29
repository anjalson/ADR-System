<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="stylereg.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
	<link rel = "stylesheet" type = "text/css" href = "../fonts/customize.css" />
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	<div class = "panel-body">
		<form enctype = "multipart/form-data" role = "form" method="post" action="register.php">
  	<?php include('errors.php'); ?>
		<div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="fname" autocomplete="off" value="<?php echo $fname; ?>">
  	</div>
		<div class="input-group">
  	  <label>Lastname</label>
  	  <input type="text" name="lname" autocomplete="off" value="<?php echo $lname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" autocomplete="off" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" autocomplete="off" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class = "btn btn-block btn-success" name="reg_user"><span class = "glyphicon glyphicon-log-in"></span>Register</button>
			 	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
	</div>
</body>
</html>