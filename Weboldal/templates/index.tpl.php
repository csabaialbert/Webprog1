<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header class="szinez">
		<img class= "center" src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
        <div class="table">
                <ul id="vizszintes">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a id="lista" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
	</header>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>

    <footer id="lab">
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
