<?php
session_start(); //Start the session

// Connect To The database
$dbconx=mysqli_connect("localhost","root","","courier") OR
	die("can't connect to database");

if (isset($_POST["submit"])) {
	// Fetch User details sent
	$username=$_POST["username"];
	$password=$_POST["password"];
	// Check if user input is blank

	if ($username=="" || $password=="") {
		echo"<center><h1>PLEASE ENTER USERNAME AND PASSWORDS</h1></center>";
        echo '<center><h1><a href="login1.php">LOGIN</a></h1></center>';
    	exit();

	} else {
		// Fetch user details
		$result = mysqli_query($dbconx,"SELECT * FROM customer WHERE username='$username' and password = '$password' LIMIT 1");
		if (mysqli_num_rows($result)>0) {
			// Create Sessions and redirect user to homepage
			$_SESSION["username"] = $username;

			header("Location:Home1.php");
		} else {
			echo"<center><h1>INCORRECT USERNAME AND PASSWORDS</h1></center>";
            echo '<center><h1><a href="login1.php">LOGIN</a></h1></center>';
    			exit();
		}
		
	}
	

	
} 
