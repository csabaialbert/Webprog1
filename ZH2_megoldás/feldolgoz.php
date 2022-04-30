<!DOCTYPE html>
<html>
<head>
    <title>Beolvasott adatok</title>
    <meta charset="utf-8">
</head>
<body>
	<pre><?php
		print_r($_POST);	// kiírja a POST változó értékeit.
		?>
	</pre>
	<?php
		//echo "Név: ".$_POST["nev"]."<br>";
		//echo "Email: ".$_POST["email"]."<br>";
		if(!isset($_POST['nev']) || strlen($_POST['nev']) < 8)
		{
			echo "Név: ".$_POST["nev"]." Hibás"."<br>";
		}
		else
		{
			echo "Név: ".$_POST["nev"]." Helyes"."<br>";
		}
		
		$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
		if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
		{
			echo "Email: ".$_POST["email"]." Hibás"."<br>";
		}
		else
		{
			echo "Email: ".$_POST["email"]." Helyes"."<br>";
		}

		if(!isset($_POST['kor']) || ($_POST['kor'])<18 || ($_POST['kor'])>120)
		{
			echo "Kor: ".$_POST["kor"]." Hibás"."<br>";
		}else
		{
			echo "Kor: ".$_POST["kor"]." Helyes"."<br>";
		}

		echo "Város: ".$_POST["varos"]." Helyes"."<br>";
	
		

		//echo "Darab: ".$_POST["darab"]."<br>";
		//echo "Nap: ".$_POST["nap"]."<br>";
	?>
</body>
</html>