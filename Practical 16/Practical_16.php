<html>
    <head>
        <title>Practical 16</title>
    </head>
    <body>
        <form action="Practical_16_O.php" method="POST">
        <table id="outtable" cellspacing="5px">
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
                    <td><input type="submit" name="Submit" value="Submit" style="margin: 20px;"></td>
                </tr>
            </table>
        </form>
    </body>
</html>