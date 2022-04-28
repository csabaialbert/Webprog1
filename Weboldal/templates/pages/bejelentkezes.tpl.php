<title>MySql</title>
<body>
<h2 id="alcim">Regisztrálja magát, ha még nem felhasználó!</h2>
    <form >
      <fieldset class="center">
        <legend>Bejlentkezés</legend>
       
            <br>
            <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
            <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
            <input type="submit" name="belepes" value="Belépés">
            <br>&nbsp;
       
      </fieldset>
    </form>
    
    <form >
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
  </body>
  
  
  
  
  <?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
        try {
            // Kapcsolódás
            $dbh = new PDO('mysql:host=localhost;dbname=dbase.sql', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            // Felhsználó keresése
            $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            echo "Sikerült!";
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }
?>

<?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h1>Bejelentkezett:</h1>
                Azonosító: <strong><?= $row['id'] ?></strong><br><br>
                Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
            <?php } else { ?>
                <h1>A bejelentkezés nem sikerült!</h1>
                <a href="pelda.html" >Próbálja újra!</a>
            <?php } ?>
        <?php } ?>




<?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
        try {
            // Kapcsolódás
            $dbh = new PDO('mysql:host=localhost;dbname=dbase', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            // Létezik már a felhasználói név?
            $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "A felhasználói név már foglalt!";
                $ujra = "true";
            }
            else {
                // Ha nem létezik, akkor regisztráljuk
                $sqlInsert = "insert into felhasznalok(id, csaladi_nev, uto_nev, bejelentkezes, jelszo)
                              values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
                $stmt = $dbh->prepare($sqlInsert); 
                $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                                     ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
                if($count = $stmt->rowCount()) {
                    $newid = $dbh->lastInsertId();
                    $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                    $ujra = false;
                }
                else {
                    $uzenet = "A regisztráció nem sikerült.";
                    $ujra = true;
                }
            }
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }

?>