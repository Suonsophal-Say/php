<?php
	if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }

	$u=$_POST['txtuser'];
	$p=md5($_POST['txtpass']);
	include "connection.php";
	// Create SQL 
	$sql="SELECT * From users WHERE Email='$u' and 
									Password='$p'";
	// Run SQL
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		$_SESSION['login']=true;
		header("Location:dashboard.php");
	}	
	else
	{
		$t="Invlalid User or Password!";
		// Redirect to index.php (Login Form)
		header("Location:index.php?sms=$t");
	}
?>