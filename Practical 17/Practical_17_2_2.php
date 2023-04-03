<html>
    <head>
        <title>Practical 17 2.2</title>
    </head>
    <body>
    <form action="Practical_17_2_3.php" method="GET">
        <table id="outtable" cellspacing="5px">
                <tr>
                    <td><label for="Gender">Gender :</label></td>
                    <td><input type="radio" name="Gender" value="male">Male <input type="radio" name="Gender" value="Female">Female</td>
                </tr>
                <tr>
                    <td><label for="Hobby">Hobby :</label></td>
                    <td><input type="checkbox" name="Hobby[]" value="Coading">Coading
                        <input type="checkbox" name="Hobby[]" value="Browsing">Browsing
                        <input type="checkbox" name="Hobby[]" value="Reading">Reading

                        <input type="hidden" name="Name" value="<?php echo $_GET['Name'] ?>">
                        <input type="hidden" name="Email" value="<?php echo $_GET['Email'] ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" name="Submit" value="Submit" style="margin: 20px;">
                </tr>
            </table>
        </form>
    </body>
</html>





























