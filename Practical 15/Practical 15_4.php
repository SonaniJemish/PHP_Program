<html>
<head>
    <title>Birthdate Calculate</title>
</head>
<body>
    <?php
    $date1 = "2002-09-17";
    $date2 = date("Y-m-d");

    function dateDiff($date1, $date2)
    {
        $date1_ts = strtotime($date1);
        $date2_ts = strtotime($date2);
        $diff = $date2_ts - $date1_ts;
        return round($diff / 86400);
    }

    $dateDiff = dateDiff($date1, $date2);

    echo "Difference between in two dates : " . $dateDiff . " Days ";
    ?>

</body>
</html>