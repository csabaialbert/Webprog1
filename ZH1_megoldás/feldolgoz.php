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

		if(!isset($_POST['darab']) || ($_POST['darab'])<1 || ($_POST['darab'])>10)
		{
			echo "Darab: ".$_POST["darab"]." Hibás"."<br>";
		}else
		{
			echo "Darab: ".$_POST["darab"]." Helyes"."<br>";
		}

		echo "Nap: ".$_POST["nap"]." Helyes"."<br>";
	
		

		//echo "Darab: ".$_POST["darab"]."<br>";
		//echo "Nap: ".$_POST["nap"]."<br>";

		
			$dbh = new PDO('mysql:host=localhost;dbname=aruhaz', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

			$sqlInsert = "insert into rendeles(id, nev, email, darab, nap)
                          values(0, :nev, :email, :darab, :nap)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
                                     ':darab' => $_POST['darab'], ':nap' => $_POST['nap']));

				if($count = $stmt->rowCount()) {
                    $newid = $dbh->lastInsertId();
                    $uzenet = "Sikeres rögzítés";                     
                    $ujra = false;
                }
                else {
                    $uzenet = "Rögzítés nem sikerült";
                    $ujra = true;
                }
		
	?>
	
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Rögzítés</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="index.html">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>