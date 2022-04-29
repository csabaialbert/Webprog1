<?php

	//szerver oldali ellenőrzés
	$fel_nev = 'Vendég';
	$datum = date('Y/m/d');


	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}


	//Adatok továbbítása az urlapdb táblának

	if(isset($_SESSION['login'])) 
	{ 
	$fel_nev = $_SESSION['login'];	
	$dbh2 = new PDO('mysql:host=localhost;dbname=dbase', 'root', '',
		array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh2->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

	$sqlInsert2 = "insert into request(id, nev, datum, email, szoveg)
		values(0, :nev, :datum, :email, :szoveg)";
	$stmt2 = $dbh2->prepare($sqlInsert2);
	$stmt2->execute(array(':nev' => $fel_nev, ':datum' => $datum, ':email' => $_POST['email'], ':szoveg' => $_POST['szoveg']));
	
	}
	else
	{ 
		
	$dbh2 = new PDO('mysql:host=localhost;dbname=dbase', 'root', '',
		array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh2->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

	$sqlInsert2 = "insert into request(id, nev, datum, email, szoveg)
		values(0, :nev, :datum, :email, :szoveg)";
	$stmt2 = $dbh2->prepare($sqlInsert2);
	$stmt2->execute(array(':nev' => $fel_nev, ':datum' => $datum, ':email' => $_POST['email'], ':szoveg' => $_POST['szoveg']));
	
	}	
	$uzenet2 = "Sikeres küldés";


?>