<?php
    session_start();
?>

<html>
    <head>
        <title>Practical 18_1</title>
    </head>
    <body>
        <?php
           echo "Favorite place is : ".$_SESSION['Favplace']."<br>";
           echo "Favorite cars is : ".$_SESSION['Favcar']."<br>";
        ?>
    </body>
</html>