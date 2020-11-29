<?php 

require_once 'connect.php';

require_once 'header2.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM adrreport WHERE id=" . $_POST['id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM adrreport";
$result = $con->query($sql); 
$user_id="";
if( $result->num_rows > 0)
{ 
	?>
	<h2>List of ADR Reports Submitted</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>reportz</td>
			<td>caseb</td>
			<td>faciname</td>
			<td>brandname</td>
			<td>reaction</td>
			<td>durreact</td>
			<td>xreact</td>
			<td>outreact</td>
			<td>serious</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		//echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['reportz'] . "</td>";
		echo "<td>".$row['caseb'] . "</td>";
		echo "<td>".$row['faciname'] . "</td>";
		echo "<td>".$row['brandname'] . "</td>";
		echo "<td>".$row['reaction'] . "</td>";
		echo "<td>".$row['durreact'] . "</td>";
		echo "<td>".$row['xreact'] . "</td>";
		echo "<td>".$row['outreact'] . "</td>";
		echo "<td>".$row['serious'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>"; 
		echo "<td><input type='submit' name='delete' value='Respond' class='btn btn-danger' /></td>";  
		//echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
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