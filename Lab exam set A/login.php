<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];

if($id == null || $password == null)
{
	echo " id or password is empty ";
}
else
{
	$file = fopen('user1.txt', 'r');
	
	while (!feof($file))
	 {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($id == trim($user[0]) && $password == trim($user[1]))
		{
			setcookie('status', 'true', time()+3600, '/');
			header('location: User_Home.php?username='.$username);	
			//header('location: Admin_Home.php?username='.$username);	
			
		}	
	}
	echo "invalid id or password";
}
?>