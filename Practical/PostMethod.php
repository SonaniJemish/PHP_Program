<html>
    <head>
        <title>POST Method</title>
    </head>
    <body>
    <form action="4.1.1_SampleForm_POST.php" method="post">
			First Name: <input type="text" name="fname"><BR><br>
			Last Name:  <input type="text" name="lname"><BR>
						<input type="submit" name="submit1">
	</form>

	<?php
	//  echo "Hello ".$_POST["fname"]."  ".$_POST["lname"]."<br>";
	
	if(isset($_POST["submit1"])) //1
	{

		//echo "Hello ".$_POST["fname"]."  ".$_POST["lname"]."<br>";


		$n1=$_POST["fname"];
		//receiving name field value in $n1 variable 

		$n2=$_POST["lname"];

		echo "Welcome user ". $n1 ."  ".$n2;
	}
	
?>
    </body>
</html>