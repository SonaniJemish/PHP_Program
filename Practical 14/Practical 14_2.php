<html>
    <head>
        <title>Practical 14_2</title>
    </head>
    <body>
        <?php
            echo "1.ASCII value of first character : ".(ord('Jemish'))."<br>";
            echo "2.String in lower case : ".(strtolower('SONANI'))."<br>";
            echo "3.String in upper case : ".(strtoupper('jemish'))."<br>";
            echo "4.Length of string : ".(strlen('Jemish'))."<br>";
            echo "5.Left trim from string : ".(ltrim('Sonani','S'))."<br>";
            echo "6.Right trim from string : ".(rtrim('Sonani','i'))."<br>";
            echo "7.Trim from string : ".(rtrim('NITIN','N'))."<br>";
            echo "8.Comparision of two string : ".(strcmp('Sonani','Jemish'))."<br>";
            echo "9.Reverse of string : ".(strrev('Sonani'))."<br>";
            echo "10.Subtract string : ".(substr('SSonani','1'))."<br>";
            echo "11.Comparision of two string case-sensitive : ".(strcasecmp('sonani','jemish'))."<br>";
            echo "12.Character position in string : ".(strpos('Jemish','h'))."<br>";
            echo "13.Character reverse position in string : ".(strrpos('Jemish','h'))."<br>";
            echo "14.Character 1 position in string : ".(stripos('Sonani','n'))."<br>";
            echo "15.Character R1 position in string : ".(strripos('Sonani','n'))."<br>";
            echo "16.Print string by word : ".(strstr('Sonani Jemish','Jemish'))."<br>";
            
            echo "17.Print String by character  : ".(stristr('Sonani Jemish','J'))."<br>";
            echo "18.String word Replace : ".(str_replace('Jemish','Parth','Sonani Jemish'))."<br>";
        ?>
    </body>
</html>