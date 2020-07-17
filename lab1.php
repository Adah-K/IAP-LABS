<?php

    include_once 'DBConnector.php';
    include_once 'user.php';

    //$con = new DBConnector;

    if (isset($_POST['btn-save'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $city = $_POST['city_name'];

        $user = new User($first_name, $last_name, $city);

        if(!$user->validateForm()){

            $user->createFormErrorSessions();
            header("Refresh:0");
            die();

        }

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

        <link rel = "stylesheet" type = "text/css" href = "validate.css">

        <script type = "text/javascript" src ="validate.js"></script>

    </head>

    <body>

        <form method = "post" name = "user_details" id = "user_details" onsubmit = "return (validateForm());" action = "<?php $_SERVER['PHP_SELF']?> "> 

            <div id = "form-errors">

                <?php

                    session_start();
                    if(!empty($_SESSION['form_errors'])){
                        echo " ". $_SESSION['form_errors'];
                        unset($_SESSION['form-errors']);
                    }
                ?>

            </div>

            <input type = "text" name = "first_name" placeholder = "First Name"/>

            <input type = "text" name = "last_name" placeholder = "Last Name"/>

            <input type = "text" name = "city_name" placeholder = "City"/>

            <button type = "submit" name = "btn-save"><strong>SAVE</strong></button>

        </form>

    </body>

</html>