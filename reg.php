<html>
<head>
    <?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'courier');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO customer (username, password, email, phone, address)

VALUES('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]','$_POST[address]')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Account Created Successfully</center></h1>";
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
        <center><h2><a href="login1.php">LOGIN</a></h2></center>
    </body>
</html>
