<?php
session_start();
 $_SESSION["username"]="";

 header('location:login1.php');
 ?>
<html>
    <head>
        <SCRIPT type="text/javascript">
            window.history.forward();
            function noBack() { window.history.forward(); }
        </SCRIPT>
    </head>
</html>