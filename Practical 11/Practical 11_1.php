<html>
    <head>
        <title>Palindrome Number</title>
    </head>
    <body>
        <?php
            $no=121;
            $n=$no;
            $reverse=0;

            
            while(floor($no)){
                $reminder=$no%10;
                // echo "$reminder<br>";
                $reverse=$reverse*10+$reminder;
                //echo "$reverse<br>";
                $no=$no/10;
                //echo "$no<br><br>";
            }

            if($n==$reverse){
                echo "$n is palindrome number.";
            }
            else{
                echo "$n is not palindrome number.";
            }

        ?>
    </body>
</html>