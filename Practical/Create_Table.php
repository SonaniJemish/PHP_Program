<html>
    <head>
        <title>Database Create</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","","Jemish1");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $crt='create table info(id int,name varchar(15), gender varchar(1))';
                $j=mysqli_query($conn,$crt);
                if($j){
                    echo "Table created successfully.";
                }
                else{
                    echo "Table create Faild.".mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        ?>
    </body>
</html>