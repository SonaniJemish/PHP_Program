<html>
    <head>
        <title>Factorial Of given number</title>
    </head>
    <body>
        <?php
            $a=5;
            function fact($a){
                $f=1;
                for($i=1;$i<=$a;$i++){
                    $f=$f*$i;
                }
                echo "Factorial Of $a is : $f";
            }
            fact($a);
        ?>
    </body>
</html>