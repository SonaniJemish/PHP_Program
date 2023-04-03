<html>
    <head>
        <title>Print No in Rreverse Form</title>
    </head>
    <body>
        <?php
             $no=12345;
             $n=$no;
             $reverse=0;
 
             
             while(floor($no)){
                 $reminder=$no%10;
                 //echo "$reminder<br>";
                 $reverse=$reverse*10+$reminder;
                 //echo "$reverse<br>";
                 $no=$no/10;
                 //echo "$no<br><br>";
             }

             echo "Reverse no of  $n  is  :    $reverse";
        ?>
    </body>
</html>