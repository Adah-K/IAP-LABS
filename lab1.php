<?php

    include_once 'DBConnector.php';
    include_once 'user.php';

    //$con = new DBConnector;

    if (isset($_POST['btn-save'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $city = $_POST['city_name'];

        $user = new User($first_name, $last_name, $city);
        $res = $user->save();

        if ($res) {

            echo "Save Operation was Successful";

        }else {
            
            echo "An Error Occured!";

        }
    }


?>



<!DOCTYPE html>
<html>

    <head>
    
        <title>IAP LAB</title>

    </head>

    <body>

        <form method = "post" action = "<?php $_SERVER['PHP_SELF']?> "> 

            <input type = "text" name = "first_name" required placeholder = "First Name"/>

            <input type = "text" name = "last_name" placeholder = "Last Name"/>

            <input type = "text" name = "city_name" placeholder = "City"/>

            <button type = "submit" name = "btn-save"><strong>SAVE</strong></button>

        </form>

    </body>

</html>