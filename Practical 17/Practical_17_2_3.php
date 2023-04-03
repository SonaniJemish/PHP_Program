<html>
    <head>
        <title>Practical 17 2.3</title>
    </head>
    <body>
    <?php
            if(isset($_GET["Submit"])){
                echo "Name : ".$_GET["Name"]."<br><br>";
                echo "Email : ".$_GET["Email"]."<br><br>";
                echo "Gender : ".$_GET["Gender"]."<br><br>";
                foreach($_GET["Hobby"] as $hob){
                    echo "Hobby : ".$hob."<br>";
                }
            }
            else{
                echo "No data found";
            }
        ?>
    </body>
</html>