<html>
    <head>
        <title>Bitwise Operator</title>
    </head>
    <body>
        <?php
            $a=7;
            $b=6;

            $ans=$a & $b;//AND
            echo "& Bitwise And Operator : ".$ans."<br>";

            $ans=$a | $b;//OR
            echo "| Bitwise OR Operator : ".$ans."<br>";

            $ans=$a ^ $b;//XOR
            echo "^ Bitwise XOR Operator : ".$ans."<br>";

            $ans=~$a;//NOT
            echo "~ Bitwise NOT Operator : ".$ans."<br>";


            $c=1;
            $ans=$a << $c;//Left Shift
            echo "Left Shift Bitwise Operator : ".$ans."<br>";

            $ans=$a >> $c;//Right Shift
            echo "Right Shift Bitwise Operator : ".$ans."<br>";
        ?>
    </body>
</html>