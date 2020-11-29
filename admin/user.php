<!DOCTYPE html>
<?php
	require_once 'logcheck.php';
?>
<html lang = "eng">
	<head>
		<title>Advese Drug Reaction Report Management System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/logo.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
	</head>
<body>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "../images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Treneyan ADR Report Management System </label>
			<?php
				$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
				$f = $q->fetch_array();
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php
						echo $f['fname']." ".$f['lname'];
							$conn->close();
						?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<div id = "sidebar">
			<ul id = "menu" class = "nav menu">
				<li><a href = "#"><i class = "glyphicon glyphicon-home"></i> Dashboard</a></li>
				<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Accounts</a>
					<ul>
						<li><a href = "admin.php"><i class = "glyphicon glyphicon-cog"></i> System Admin</a></li>
						<li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> User</a></li>
					</ul>
					<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient List</a></li></li>
					</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div id = "add" class = "panel panel-success">	
			<div class = "panel-heading">
				<label>ADD USER</label>
				<button id = "hide" class = "btn btn-sm btn-danger" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
			</div>
			<div class = "panel-body">
				<form id = "form_user" method = "POST" enctype = "multi-part/form-data">
					<div class = "panel panel-default" style = "width:60%; margin:auto;">
					<div class = "panel-heading">
					</div>
					<div class = "panel-body">
					<div class = "form-group">
							<label for = "Firstname">FirstName: </label>
							<input class = "form-control" name = "fname" type = "text" required = "required">
						</div>
						<div class = "form-group">	
							<label for = "lastname">Last Name: </label>
							<input class = "form-control" name = "lname" maxlength = "12" type = "text" required = "required">
						</div>
						<div class = "form-group">
							<label for = "username">Username: </label>
							<input class = "form-control" name = "username" type = "text" required = "required">
						</div>
						<div class = "form-group">	
							<label for = "email">Email: </label>
							<input class = "form-control" name = "email" maxlength = "12" type = "email" required = "required">
						</div>
						<div class = "form-group">
							<label for = "firstname">password: </label>
							<input class = "form-control" type = "text" name = "password" required = "required">
						</div>
						<button class = "btn btn-primary" name = "save_user" ><span class = "glyphicon glyphicon-save"></span> SAVE</button>
							<br />
					</div>	
					<?php require 'add_user.php'?>
					</div>
				</form>			
			</div>	
		</div>	
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<label>ACCOUNTS / USER</Label>
			</div>
			<div class = "panel-body">
				<button id = "show" class = "btn btn-info"><span class  = "glyphicon glyphicon-plus"></span> ADD</button>
				<br />
				<br />
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					<?php
						$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `users` ORDER BY `id` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['fname']?></td>
							<td><?php echo $fetch['lname']?></td>
							<td><?php echo $fetch['username']?></td>
							<td><?php echo $fetch['email']?></td>
							<td><?php echo md5($fetch['password'])?></td>
							<td><center><a href = "edit_user.php?id=<?php echo $fetch['id']?>&lname=<?php echo $fetch['lname']?>"class = "btn btn-sm btn-warning"><i class = "glyphicon glyphicon-edit"></i> Update</a> <a onclick = "delete_user(this); return false;"  href = "delete_user.php?id=<?php echo $fetch['id']?>&lname=<?php echo $fetch['lname']?>" class = "btn btn-sm btn-danger"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
						</tr>
					<?php
						}
						$conn->close();
					?>
					</tbody>
					</table>
			</div>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; CopyrightTreneyan IT Sol 2020</label>
	</div>
	<script type = "text/javascript">
		function delete_user(that){
			var delete_func = confirm("Are you sure you want to delete this record?")
			if(delete_func){
				window.location = anchor.attr("href");
			}
		}
	</script>
<?php include("script.php"); ?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	
</body>
</html>