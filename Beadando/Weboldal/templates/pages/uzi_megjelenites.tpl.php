
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=urlapdb', 'root', '');

    $sql = 'SELECT  id,
                    nev,
                    datum,
                    szoveg
               FROM request
              ORDER BY id DESC' ;

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
?>



<body>
        <h1 id="cim">Üzenetek</h1>
            <?php while ($row = $q->fetch()): ?>
                <table id="kapcs" style="width:100%">
                    <tr style="padding-bottom: 50pt;">
                        <td id="kapcsolat1" style="width:200px">Azonosító: <?php echo htmlspecialchars($row['id']) ?></td>
                        <td id="kapcsolat1" style="width:200px">Név: <?php echo htmlspecialchars($row['nev']); ?></td>
                    
                        <td id="kapcsolat1" style="width:200px">Dátum: <?php echo htmlspecialchars($row['datum']); ?></td>
                        <td id="kapcsolat1" style="width:700px">Üzenet:<?php echo htmlspecialchars($row['szoveg']); ?></td>
                    </tr>
                    
                </table>
                    
            <?php endwhile; ?>
</body>


