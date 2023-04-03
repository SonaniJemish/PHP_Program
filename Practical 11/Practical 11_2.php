<html>
    <head>
        <title>Display Grade</title>
    </head>
    <body>
        <?php
            $m1=30;
            $m2=15;
            $m3=20;
            $m4=35;
            $m5=27;

            echo "Subject 1 marks : $m1<br>";
            echo "Subject 2 marks : $m2<br>";
            echo "Subject 3 marks : $m3<br>";
            echo "Subject 4 marks : $m4<br>";
            echo "Subject 5 marks : $m5<br><br>";

            $total=$m1+$m2+$m3+$m4+$m5;
            echo "Total Marks : $total<br><br>";

            $avg=$total/5;
            echo "Avg Marks : $avg<br><br>";

            if($avg>=30){
                echo "Grade : A";
            }
            elseif($avg>=20){
                echo "Grade : B";
            }
            elseif($avg>=12){
                echo "Grade : C";   
            }
            elseif($avg<12){
                echo "You are not pass the exam.";
            }
        ?>
    </body>
</html>