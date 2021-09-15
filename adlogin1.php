<?php
$uid = $_POST['username'];
$pw = $_POST['password'];

if($uid == 'admin' and $pw == 'admin')
{	
	session_start();
	$_SESSION["username"] = $uid;
	header("location:Employee_home1.php");
}

if($uid == '' || $pw == '')
{	
	echo"<center><h1>PLEASE ENTER USERNAME AND PASSWORDS</h1></center>";
    
    echo '<center><h1><a href="adlogin.php">LOGIN</a></h1></center>';
    exit();
}
?>
