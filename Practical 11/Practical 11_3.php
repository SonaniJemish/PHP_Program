<html>
    <head>
        <title>Maximum No</title>
    </head>
    <body>
        <?php
            $a=10;
            $b=20;
            $c=30;

            echo "a : $a<br>";
            echo "b : $b<br>";
            echo "c : $c<br><br>";

            $max=($a>$b?($a>$c?$a:$c):($b>$c?$b:$c));

            echo "Maximum No is : $max";
        ?>
    </body>
</html>