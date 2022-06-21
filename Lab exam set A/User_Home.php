<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
<head>
	<title>User Home Page</title>
</head>
<body>
	<h1>Welcome <?php echo $_GET['username'];?>!</h1>
	<a href="Profile.php"> Profile </a> <br> 
	<a href="changePassword.php"> Change Password </a><br>
	<a href="logout.php"> logout </a>
</body>
</html>

<?php 
	}
	else
	{
		echo "invalid request!";
	} 
?>