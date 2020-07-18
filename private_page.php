<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
?>
<html>
    <head>
        <title>Private Page</title>
    </head>

    <body>
        <p> This is a private page</p>
        <p>We wanna protect it.</p>
        <p><a href ="logout.php">Logout</a></p>
    </body>
</html>