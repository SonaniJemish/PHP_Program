<html>
    <head>
        <title>Arithmatic , Comparison and Logical Operator</title>
    </head>
    <body>
        <?php
        
            $a=70;
            $b=12;

            echo "a is : ".$a."<br>";
            echo "b is : ".$b."<br><br><br>";

            echo "<h3>Arithmatic Operators</h3><br><br>";

            echo "Addition of given no is : ".$a+$b."<br><br>";
            echo "Subtraction of given no is : ".$a-$b."<br><br>";
            echo "Multiplication of given no is : ".$a*$b."<br><br>";
            echo "Division of given no is : ".$a/$b."<br><br>";
            echo "Modulas of given no is : ".$a%$b."<br><br>";

            echo "<h3>Comparison Operators</h3><br><br>";

            echo " given no is same".var_dump($a==$b)."<br><br>";
            echo " given datatype is same".var_dump($a===$b)."<br><br>";
            echo " given no is not same".var_dump($a!=$b)."<br><br>";
            echo " given no is graterthan".var_dump($a>$b)."<br><br>";
            echo " given no is lessthan".var_dump($a<$b)."<br><br>";
            echo " given no is lessorequal".var_dump($a<=$b)."<br><br>";
            echo " given no is graterorequal".var_dump($a>=$b)."<br><br>";

            echo "<h3>Logical Operators</h3><br><br>";

            echo "And operation of given no is : ".var_dump($a==12 and $b==70)."<br><br>";
            echo "And operation of given no is : ".var_dump($a==12 && $b==70)."<br><br>";
            echo "Or operation of given no is : ".var_dump($a==70 or $b==70)."<br><br>";
            echo "Or operation of given no is : ".var_dump($a==70 || $b==70)."<br><br>";
            echo "XOR operaation of given no is : ".var_dump($a==70 xor $b==8)."<br><br>";
        ?>
    </body>
</html>