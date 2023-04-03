<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <?php
            $a=7012;
            echo "Variable a value is : $a"."<br>";
            echo "Datatype of variable a before settype : ".gettype($a)."<br><br>";
            settype($a,"String");
            echo "Datatype of variable a after settype : ".gettype($a)."<br><br><br>";
            
            $b="7012";
            echo "Variable b value is : $b"."<br>";
            echo "Datatype of variable b before settype : ".gettype($b)."<br><br>";
            settype($b,"Integer");
            echo "Datatype of variable b after settype : ".gettype($b)."<br><br><br>";
            
            $c="Jemish";
            echo "Variable c value is : $c"."<br>";
            echo "Datatype of variable c before settype : ".gettype($c)."<br><br>";
            settype($c,"Boolean");
            echo "Datatype of variable c after settype : ".gettype($c)."<br><br><br>";


            $d=NULL;
            echo "Variable d value is : $d"."<br>";
            echo "Datatype of variable d before settype : ".gettype($d)."<br><br>";
            settype($d,"Double");
            echo "Datatype of variable d after settype : ".gettype($d)."<br><br><br>";

            $e=70.12;
            echo "Variable e value is : $e"."<br>";
            echo "Datatype of variable e before settype : ".gettype($e)."<br><br>";
            settype($e,"NULL");
            echo "Datatype of variable e after settype : ".gettype($e)."<br><br><br>";

            $f=true;
            echo "Variable f value is : $f"."<br>";
            echo "Datatype of variable f before settype : ".gettype($f)."<br><br>";
            settype($f,"String");
            echo "Datatype of variable f after settype : ".gettype($f)."<br><br><br>";

        ?>
    </body>
</html>