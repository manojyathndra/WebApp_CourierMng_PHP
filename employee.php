<?php
session_start();
if($_SESSION["username"]!="")
{

?>
<html>
    <head>
    <?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'courier');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO employee (ename, eid, address, phone, email, salary, position, bid)

VALUES('$_POST[ename]','$_POST[eid]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[salary]','$_POST[position]','$_POST[bid]')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New Employee Details Added Successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<style>
                    body{margin=0 auto;
		                  background-image:url(c8.jpg);
		                  background-repeat:no-repeat;
		                  background-size:100%;
		                  }
                a:link{
		              color:black;
		              text-decoration:none;
		              }

	           a:visited{
		              color:black;
		              }
            </style>
    </head>
    
    <body>
        <center><h2><a href="Employee_home1.php">HOME</a></h2></center>
    </body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>