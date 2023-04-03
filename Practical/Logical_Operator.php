<html>
    <head>
        <title>Logical Operator</title>
    </head>
    <body>
        <?php
            $a=70;
            $b=12;

            if($a==70 and $b==12)
            echo "And Operation Succesfull.<br>";

            if($a==70 or $b==8)
            echo "Or Operation Succesfull.<br>";

            if($a==70 xor $b==8)
            echo "Xor Operation Succesfull.<br>";

            if($a==70 && $b==12)//AND
            echo "&& Operation Succesfull.<br>";

            if($a==70 || $b==12)//OR
            echo "|| Operation Succesfull.<br>";

            if(!$a)//NOT
            echo "! Operation Succesfull."
        ?>
    </body>
</html>