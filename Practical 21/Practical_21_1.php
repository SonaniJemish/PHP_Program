<html>
    <head>
        <title>Practical 21</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $dbc='create database Student';
                if(mysqli_query($conn,$dbc)){
                    echo "Database Created.";
                    if(mysqli_select_db($conn,"Student")){

                        $crt='create table Personal_Details(Enr_NO int,Name varchar(15), Semester int(1), Dpt varchar(15), DOB date,Contact int, SPI float)';
                        $j=mysqli_query($conn,$crt);
                            if($j){
                                echo "<br>Table created successfully.";
                            }
                            else{
                                echo "Table create Faild.".mysqli_error($conn);
                            }
                    }
                }
                else{
                    echo "Databse creation faild.".mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        ?>
    </body>
</html>