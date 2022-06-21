<?php 
$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$confirmPass = $_REQUEST['cpassword'];
$username = $_REQUEST['username'];
$userType = $_REQUEST['usertype'];
$fname = $_REQUEST['fname'];

if($id == null || $password == null || $confirmPass == null || $userType = null || $username = null)
{
	echo "  id or password or confirm password or user type or name is empty";
}
else{
	if($password == $confirmPass)
	{
		$user = $id."|".$password."|".$confirmPass."|".$username."\r\n";
		$file = fopen('user1.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create')
		{
			header('location: Login.html');
		}
		else
		{
			header('location: Registration.html');			
		}
	}
	else
	{
		echo " password and confirmPass dosent match ";
	}
		

}
?>