<html>
    <head>
        <title>PHP connect with MySQL</title>
    </head>
    <body>
        <?php
            $server="localhost";
            $username="root";
            $pass="";

            $conn=mysqli_connect($server,$username,$pass);
            if(!$conn){
                die("Connection Faild : ".mysqli_connect_error());
            }
        ?>
    </body>
</html>