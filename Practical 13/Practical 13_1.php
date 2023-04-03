<html>
    <head>
        <title>For each statement</title>
    </head>
    <body>
        <?php
            $myarry=array("laxmi"=>"31","Sarasvati"=>"41","Sati"=>"39","Vaibhavi"=>"40");
            
            echo "1.Display key value pair using for each statement<br><br>";
            foreach ($myarry as $key=>$value){
                echo "$key  => $value<br>";
            }

            echo "<br><br>2.ascending order sort by value<br><br>";
            asort($myarry);
            foreach($myarry as $key=>$value){
                echo "$key  => $value<br>";
            }

            echo "<br><br>3.ascending order sort by key<br><br>";
            ksort($myarry);
            foreach($myarry as $key=>$value){
                echo "$key  => $value<br>";
            }

            echo "<br><br>4.descending order sort by value<br><br>";
            arsort($myarry);
            foreach($myarry as $key=>$value){
                echo "$key  => $value<br>";
            }

            echo "<br><br>5.descending order sort by key<br><br>";
            krsort($myarry);
            foreach($myarry as $key=>$value){
                echo "$key  => $value<br>";
            }
        ?>
    </body>
</html>