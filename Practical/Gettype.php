<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <?php
            $a=7012;
            echo "Variable a value is : $a"."<br>";
            echo "Datatype of variable a : ".gettype($a)."<br><br>";
            
            $b="7012";
            echo "Variable b value is : $b"."<br>";
            echo "Datatype of variable b : ".gettype($b)."<br><br>";
            
            $c="Jemish";
            echo "Variable c value is : $c"."<br>";
            echo "Datatype of variable c : ".gettype($c)."<br><br>";

            $d=NULL;
            echo "Variable d value is : $d"."<br>";
            echo "Datatype of variable d : ".gettype($d)."<br><br>";

            $e=70.12;
            echo "Variable e value is : $e"."<br>";
            echo "Datatype of variable e : ".gettype($e)."<br><br>";

            $f=true;
            echo "Variable f value is : $f"."<br>";
            echo "Datatype of variable f : ".gettype($f)."<br><br>";

        ?>
    </body>
</html>