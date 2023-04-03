<?php
            if(isset($_POST["Submit"])){
                echo "Name : ".$_POST["Name"]."<br><br>";
                echo "Email : ".$_POST["Email"]."<br><br>";
                echo "Gender : ".$_POST["Gender"]."<br><br>";
                foreach($_POST["Hobby"] as $hob){
                    echo "Hobby : ".$hob."<br>";
                }
            }
?>