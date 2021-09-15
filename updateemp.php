<?php
session_start();
if($_SESSION["username"]!="")
{

?>
s<html>
    <head>
        <?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'courier');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE Employee SET address='$_POST[address1]',  phone='$_POST[phone1]',  email='$_POST[email1]', salary='$_POST[salary1]', position='$_POST[position1]', bid='$_POST[bid1]'  WHERE eid='$_POST[eid1]'";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Employee Details Updated Successfully</center></h1>";
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