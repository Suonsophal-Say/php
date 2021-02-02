	<?php
if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }

if($_SESSION['login']==true)
{
	$u=$_POST['txtName'];
	$e=$_POST['txtEmail'];
	$p=md5($_POST['txtPass']);
	$other=$_POST['txtOther'];

	// Create connection to Database
	include "connection.php";

	// Create SQL 
$sql="INSERT INTO users VALUES(NULL,'$u','$e','$p','$other')";

	// Run SQL
	$result=$conn->query($sql);
	header("Location:dashboard.php");

}
else
{
	$t="Please Login Before Adding!";
		// Redirect to index.php (Login Form)
		header("Location:index.php?sms=$t");
}
?>