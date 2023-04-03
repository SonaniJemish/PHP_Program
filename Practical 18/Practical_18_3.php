<?php
$cookie_name = "user";
$cookie_value = "Jemish";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <head>
        <title>Practical 18_3</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie name
                 '" . $cookie_name . "' is not set!";
            }
            else {
                echo "Cookie " . $cookie_name . " is set...<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>