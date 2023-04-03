<html>
    <head>
        <title>Practical 22</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","","Student");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                    $s = "select * from Personal_Details";
                    $out =mysqli_query($conn,$s);

                    echo "<table border='1'>
                            <tr>
                                <th>Enr_No</th>
                                <th>Name</th>
                                <th>Sem</th>
                                <th>Department</th>
                                <th>DoB</th>
                                <th>Contact</th>
                                <th>SPI</th>
                            </tr>";

                    while($row = mysqli_fetch_row($out)){
                        echo "<tr><td>";
                        echo $row[0];
                        echo "</td><td>";
                        echo $row[1];
                        echo "</td><td>";
                        echo $row[2];
                        echo "</td><td>";
                        echo $row[3];
                        echo "</td><td>";
                        echo $row[4];
                        echo "</td><td>";
                        echo $row[5];
                        echo "</td><td>";
                        echo $row[6];
                        echo "</td></tr>";
                    }
                        
                    echo "</table>";
                }
        ?>
    </body>
</html>