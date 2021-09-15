<?php
session_start();
if($_SESSION["username"]!="")
{

?><html>
<head><?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'courier');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO feedback (fid, message, rating, username)

VALUES('$_POST[feedbackid]','$_POST[fb]','$_POST[rating]','$_POST[username]')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center><FeedBack Sent Successfully</center></h1>";
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
        <center><h2><a href="Home.html">HOME</a></h2></center>
    </body>
</html>
<?php
}
else{
    header('location:session.html');
}
?>