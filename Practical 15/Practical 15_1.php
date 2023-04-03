<html>
    <head>
        <title>Date Time function</title>
    </head>
    <body>
        <?php
            echo "Current Time : ".time()."<br>";
            echo "Current Day : ".date('d')."<br>";
            echo "Current Month : ".date('m')."<br>";
            echo "Current Year : ".date('y')."<br>";
            echo "Today date : ".date('d-m-y')."<br>";
            echo "My birth date : ".date("d-M-Y",mktime(0,0,0,9,17,2002))."<br>";
            echo "Date Formate Month-Day-Year : ".checkdate(9,17,2002)."<br><br>";
            print_r(getdate());
        ?>
    </body>
</html>