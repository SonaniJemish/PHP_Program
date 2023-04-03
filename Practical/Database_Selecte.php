<html>
    <head>
        <title>Database Selecte</title>
    </head>
    <body>
        <?php

use FTP\Connection;

            $conn=mysqli_connect("localhost","root","");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $dbs=mysqli_select_db($conn,'Jemish');
                if(!$dbs){
                    die("Can not use db : ".mysqli_error($conn));
                }
                else{
                    echo "Databse Select Successfully";
                }
            }
        ?>
    </body>
</html>