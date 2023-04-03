<html>
    <head>
        <title>Database drop</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $dbc='drop database Student';
                if(mysqli_query($conn,$dbc)){
                    echo "Database droped.";
                }
                else{
                    echo "Databse drop faild.".mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        ?>
    </body>
</html>