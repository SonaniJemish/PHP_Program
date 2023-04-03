<?php
    session_start();
?>

<html>
    <head>
        <title>Practical 18_1</title>
    </head>
    <body>
        <?php
            $_SESSION['Favplace']='kedarnath';
            $_SESSION['Favcar']='harrier';

            echo "Session variables are set ..."
        ?>
    </body>
</html>
