<?php
	if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }

if($_SESSION['login']==true)
{
	$id= $_GET['x'];
	// Create connection to Database
	include "connection.php";

	// Create SQL 
	$sql="DELETE from users WHERE Id='$id'";

	// Run SQL
	$result=$conn->query($sql);
	//Redirect to dashboard
	header("Location:dashboard.php");
}
else
{
	$t="Please Login First!";
		// Redirect to index.php (Login Form)
		header("Location:index.php?sms=$t");
}

	

?>