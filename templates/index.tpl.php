<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
        <meta charset="utf-8">
        <title>Csömöri Állatvédő Civil Szervezet | Kutyamenhely</title>
    
    </head>
	<body>
    <main class ="szinez" >
        <a href="#"><img src="logo.png" alt="logo" class="center"></a>
            <nav>
                <ul id="vizszintes">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li<?= (($oldal == $keres) ? '' : '') ?>>
						<a id="lista" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
		</main>
	</body>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</html>
