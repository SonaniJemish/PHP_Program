<html>
    <head>
        <title>Practical_17_1</title>
    </head>
    <body>
    <form action="Practical_17_1.php" method="get">
        <table cellspacing="5px">
                <tr>
                    <td><label for="Name">Name :</label></td>
                    <td><input type="text" name="Name"></td>
                </tr>
                <tr>
                    <td><label for="Email">Email Id :</label></td>
                    <td><input type="email" name="Email"></td>
                </tr>
                <tr>
                    <td><label for="Gender">Gender :</label></td>
                    <td><input type="radio" name="Gender" value="male">Male <input type="radio" name="Gender" value="Female">Female</td>
                </tr>
                <tr>
                    <td><label for="Hobby">Hobby :</label></td>
                    <td><input type="checkbox" name="Hobby[]" value="Coading">Coading
                        <input type="checkbox" name="Hobby[]" value="Browsing">Browsing
                        <input type="checkbox" name="Hobby[]" value="Reading">Reading
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="Submit" value="Submit"></td>
                </tr>
            </table>
        </form>


        <?php
            if(isset($_GET["Submit"])){
                echo "Name : ".$_GET["Name"]."<br><br>";
                echo "Email : ".$_GET["Email"]."<br><br>";
                echo "Gender : ".$_GET["Gender"]."<br><br>";
                foreach($_GET["Hobby"] as $hob){
                    echo "Hobby : ".$hob."<br>";
                }
            }
        ?>
    </body>
</html>