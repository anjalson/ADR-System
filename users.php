<?php 

require_once 'connect.php';

require_once 'header2.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM users";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	<h2>List of all Registered Users</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Username</td>
			<td>Email</td>
			<td>Mobile</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['fname'] . "</td>";
		echo "<td>".$row['sname'] . "</td>";
		echo "<td>".$row['username'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td>".$row['mobile'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>EDIT</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>

<?php 

 require_once 'footer.php';