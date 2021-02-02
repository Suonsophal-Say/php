<?php
if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
?>
<!Doctype html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="keywords" content="Keyword Here" />
	<meta name="description" content="Description Here"/>
	<meta charset="utf-8"/>   
</head>
<body>
<?php
	if($_SESSION['login']==true)
	{
		echo "<h1>Welcome to dashboard</h1>";
		echo "<a href='logout.php'>Log out</a>";
		echo "<h3>Users</h3>";
		include "select_users.php";
	}	
	else
	{
		$t="Please Login First!";
		// Redirect to index.php (Login Form)
		header("Location:index.php?sms=$t");
	}
?>
</body> 
</html>		 
