<?php
    // Alkalmazás logika:
    include('./includes/config_galeria.inc.php');
    
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            $nev= strtolower($fajl);
            if (in_array($vege, $TIPUSOK) && str_contains($nev, 'julia'))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
    ?>

<body>
<div id="galeria">
    <div>
                <h1 id="cim">Júlia</h1>
                <h2>Adatok:</h2>
                <table id="gal">
                    <tr>
                        <td id="galeria1">Fajta:</td>
                        <td id="galeria1">Keverék</td>
                        <td id="galeria">Szül. idő:</td>
                        <td id="galeria">2020, 1.hó</td>
                    </tr>
                    <tr>
                        <td id="galeria">Nem:</td>
                        <td id="galeria">szuka</td>
                        <td id="galeria1">Befogadtuk:</td>
                        <td id="galeria1">2021-09-16</td>
                    </tr>
                    <tr>
                        <td id="galeria1">Méret:</td>
                        <td id="galeria1">közepes</td>
                        <td id="galeria">Gerekeket szereti:</td>
                        <td id="galeria">igen</td>
                    </tr>
                </table>
            </div>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
        
        
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>
        </div>
    <?php
    }
    ?>
    </div>
</body>
