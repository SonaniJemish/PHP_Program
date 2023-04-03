<html>
    <head>
        <title>Prime number Or Not</title>
    </head>
    <body>
        <?php
            $a=5;

            for($i=2;$i<=$a/2;$i++){
                if($i==0)
                    echo "$a is Prime Number";
                else
                    echo "$a is Not Prime Number";
                break;       
            }
        ?>
    </body>
</html>