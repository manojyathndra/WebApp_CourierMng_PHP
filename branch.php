<html>
    <head>
        <?php
        // Create connection
        $conn = mysqli_connect('localhost', 'root', '', 'courier');
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql="INSERT INTO branch (bid, branch_name, branch_address, phone, pincode)

    VALUES('$_POST[bid]','$_POST[bname]','$_POST[address]','$_POST[phone]','$_POST[pincode]')";

        if (mysqli_query($conn, $sql)) {
            echo "<center><h1>New Branch Added Successfully!!</h1></center>";
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