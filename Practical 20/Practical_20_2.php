<html>
    <head>
        <title>Database Create</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $dbc='create database store';
                if(mysqli_query($conn,$dbc)){
                    echo "Database jemish2 Created.";
                }
                else{
                    echo "Databse creation faild.".mysqli_error($conn);
                }

                // $dbc='drop database Student';
                // if(mysqli_query($conn,$dbc)){
                //     echo "Database student droped.";
                // }
                // else{
                //     echo "Databse drop faild.".mysqli_error($conn);
                // }

            }
            mysqli_close($conn);
        ?>
    </body>
</html>