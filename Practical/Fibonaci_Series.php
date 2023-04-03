<html>
    <head>
        <title>Fibonaci Series</title>
    </head>
    <body>
        <?php
            $a=10;
            $fibo=0;
            $first=0;
            $second=1;

            echo "Fibonaci Series : $first<br>";
            echo "Fibonaci Series : $second<br>";

            for($i=0;$i<=$a;$i++){
                $fibo=$first+$second;
                $first=$second;
                $second=$fibo;

            echo "Fibonaci Series : $fibo<br>";
            }
        ?>
    </body>
</html>