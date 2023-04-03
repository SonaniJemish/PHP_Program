0


<div class=""></div><html>
    <head>
        <title>PHP connect with MySQL</title>
    </head>
    <body>
        <?php
            $server="localhost";//mysql server name
            $username="root";//mysql user name
            $pass="";//mysql user password

            $conn=mysqli_connect($server,$username,$pass);//mysql connection query : mysqli_connect(servsername,username,password)
            if(!$conn){
                die("Connection Faild : ".mysqli_connect_error());
            }
            else{
                echo "Connected Successfully.";
            }
        ?>
    </body>
</html>