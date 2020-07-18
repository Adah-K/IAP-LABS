<?php

    include_once 'DBConnector.php';
    include_once 'user.php';

    $con = new DBConnector;
    if (isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $instance = User::create();
        $instance->setPassword($password);
        $instance->setusername($username);

        if($instance->isPasswordCorrect()){
            $instance->login();
            $con->closeDatabase();
            $instance->createUserSession();
        }else {
            $con->closeDatabase();
            header("Location:login.php");
        }
    }
?>
<html>

    <head>
        <title>Login</title>

        <script type = "text/javascript" src = "validate.js"></script>

        <link rel = "stylesheet" type = "text/css" href = "validate.css">
    </head>

    <body>

        <form method = "post" name = "login" id = "login" action = "<?php $_SERVER['PHP_SELF']?>">
            <input type = "text" name = "username" placeholder = "Username" required/>
            
            <input type = "password" name = "password" placeholder = "Password" required/>

            <button type = "submit" name = "btn-login"><strong>LOGIN</strong></button>
        </form>

    </body>

</html>