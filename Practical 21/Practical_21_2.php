<html>
    <head>
        <title>Practical 21_2</title>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","","Student");

            if(!$conn){
                die("Connection faild : ".mysqli_connect_error());
            }
            else{
                echo"Connected Successfully.<br>";

                $in = "insert into Personal_Details values(7012,'Jemish',5,'Computer','2002-09-17',1234567890,8.45)";
                if(mysqli_query($conn,$in)){
                    echo "Record insertred successfully";

                    $s = "select * from Personal_Details";
                    $out =mysqli_query($conn,$s);

                    echo "<table border='1'>
                            <tr>
                                <th>Enrollment_No</th>
                                <th>Name</th>
                                <th>Semester</th>
                                <th>Department</th>
                                <th>Date_of_Birth</th>
                                <th>Contact_number</th>
                                <th>SPI</th>
                            </tr>";

                    while($row = mysqli_fetch_array($out)){
                        echo "<tr>";
                        echo "<td>".$row['Enr_NO']."</td>";
                        echo "<td>".$row['Name']."</td>";
                        echo "<td>".$row['Semester']."</td>";
                        echo "<td>".$row['Dpt']."</td>";
                        echo "<td>".$row['DOB']."</td>";
                        echo "<td>".$row['Contact']."</td>";
                        echo "<td>".$row['SPI']."</td>";
                        echo "</tr>";
                    }
                        
                    echo "</table>";
                }
                else{
                    echo "Record insertation faild";
                }
            }
        ?>
    </body>
</html>