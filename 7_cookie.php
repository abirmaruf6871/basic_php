<?php
$cookie_name="user";
$cookie_value="Abir Ahmed";
setcookie($cookie_name,$cookie_value,time() + (86400*30), "/");
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "cookie name ".$cookie_name . " is not set";

        }
        else{
            echo "cookie name" .$cookie_name . "is set";
            echo "Value is ".$_COOKIE[$cookie_name];
        }
        
        ?>
    </body>
</html>