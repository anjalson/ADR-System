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
		<img src = "../images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Advese Drug Reaction Report Management System </label>
			<?php
				$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
				$f = $q->fetch_array();
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown">
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
						<li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> User Records </a></li>
					</ul><li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient List</a></li></li>
				</li>
				
								
				</li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div style = "display:none;" id = "add_itr" class = "panel panel-success">	
			<div class = "panel-heading">
				<label>ADD Patient Info</label>
				<button id = "hide_itr" style = "float:right; margin-top:-4px;" class = "btn btn-sm btn-danger"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
			</div>
			<div class = "panel-body">
			<form id = "form" method = "POST" enctype = "multipart/form-data">
				<label>Name
        <span class="small">Add your name</span>
    </label><br>
<input type="text" name="name">
    <label>Email
        <span class="small">Enter a Valid Email</span>
    </label><br>
<input type="email" name="email2">
    <label>Phone
        <span class="small">Add a Phone Number</span>
    </label><br>
<input type="text" name="phone">

<br />
<br />
    <label>Priority  
        <span class="small">Priority Level  </span>
    </label><br>

<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
    <label>Type
        <span class="small">Type of Contact</span>
    </label><br>
<select name="type" size="1">
<option value="update">Follow-up</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New ADR reporting</option>
<option value="new">Any other</option>
</select>
<br />
<br />
<br />


    <label>Message
        <span class="small">Type Your Message</span>
    </label><br>
<textarea name="message" rows="6" cols="50"></textarea><br />

    <button class="btns" type="submit" name="submit" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

				</form>
			</div>	
		</div>	
		//<?php require 'add_patient.php'?>
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<label>Patient's List</Label>
			</div>
			<div class = "panel-body">
				<button id = "show_itr" class = "btn btn-info"><span class = "glyphicon glyphicon-plus"></span> Add Patient</button>
				<br />
				<br />
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					<thead>
						<tr>
							<td>name</td>
                            <td>email2</td>
                            <td>phone</td>
                            <td>website</td>
                            <td>priority</td>
                            <td>type</td>
                            <td>message</td>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					<?php
						$conn = new mysqli("localhost", "root", "", "nelson") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `contact` ORDER BY `id` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
										?>
						<tr>
							<td><?php echo $fetch['patient_no']?></td>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['birthdate']?></td>				
							<td><?php echo $fetch['age']?></td>				
							<td><?php echo $fetch['civil_status']?></td>
							<td><center><a href = "complaints.php?id=<?php echo $fetch['patient_no']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-info">Complaints <span class = "badge"><?php echo $f['total']?></span></a> 
							<a href = "edit_patient.php?id=<?php echo $fetch['patient_no']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update</a></center></td>
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
		<label class = "footer-title">&copy; Copyright Treneyan IT Sol</label>
	</div>
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