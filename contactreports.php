<?php 

require_once 'connect.php';

require_once 'header2.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM contact WHERE id=" . $_POST['id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM contact";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	<h2>Reports From Contact us Tab</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>name</td>
			<td>email2</td>
			<td>phone</td>
			<td>website</td>
			<td>priority</td>
			<td>type</td>
			<td>message</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
			<td width="70px">Reply</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		//echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['name'] . "</td>";
		echo "<td>".$row['email2'] . "</td>";
		echo "<td>".$row['phone'] . "</td>";
		echo "<td>".$row['website'] . "</td>";
		echo "<td>".$row['priority'] . "</td>";
		echo "<td>".$row['type'] . "</td>";
		echo "<td>".$row['message'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
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
 