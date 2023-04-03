<html>
    <head>
        <title>Current File No</title>
    </head>
    <body>
        <?php

            echo $_SERVER['REMOTE_ADDR'];
            echo"<br>"; 
            echo gethostbyname("www.google.com");
            echo"<br><br>"; 

            print_r($_SERVER);

        ?>
    </body>
</html>