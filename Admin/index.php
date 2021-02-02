<!Doctype html>
<html>
<head>
	<title>Login</title>
	<meta name="keywords" content="Keyword Here" />
	<meta name="description" content="Description Here"/>
	<meta charset="utf-8"/>   
</head>
<body>
	<?php
		if(isset($_GET['sms']))
		{
			echo "<div style='color:red;'>
							$_GET[sms]
				  </div>";
		}
	?>
	<form name="frmlogin" method="POST" action="verify_user.php">
		<label>User Name : </label>
		<input type="text" name="txtuser"><br>
		<label>Password : </label>
		<input type="password" name="txtpass"><br>
		<input type="submit" value="Log In">
	</form>
</body> 
</html>		 
