<?php
	if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
	// Create connection to Database
	include "connection.php";

	// Create SQL 
	$sql="SELECT * From users";

	// Run SQL
	$result=$conn->query($sql);

if($_SESSION['login']==true)
{

echo "<a href='form_u.php'>Add User</a>";
echo "
	<table border=1 cellpadding=5px cellspacing=2px>
	<tr>
		<th>ID</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Pass</th>
		<th>Other</th>
		<th>Action</th>
	</tr>
	";

	if($result->num_rows>0)
	{
		while ($row=$result->fetch_array())
		{
		echo "<tr>";	
			echo "<td>" . $row[0] . "</td>";
			echo "<td>" . $row[1] . "</td>";
			echo "<td>" . $row[2] . "</td>";
			echo "<td>" . $row[3] . "</td>";
			echo "<td>" . $row[4] . "</td>";
			echo "<td>Edit |<a href='delete_u.php?x=$row[0]'> Delete</a> </td>";
		echo "</tr>";
		}
	}
}
else
{
	$t="Please Login First!";
		// Redirect to index.php (Login Form)
		header("Location:index.php?sms=$t");
}
?>
	</table>