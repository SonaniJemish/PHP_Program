<html>
    <head>
        <title>Convert Date formamat</title>
    </head>
    <body>
        <?php
            $date="2002-09-17";
            echo "Before Convert : $date"."<br>";
            $ndate=date("d-m-Y",strtotime($date));
            echo "After Convert : $ndate"."<br>";
        ?>
    </body>
</html>