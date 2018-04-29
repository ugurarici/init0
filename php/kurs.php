<?php
require "data.php";

$kursAnahtari = $_GET['id'];
$kurs = $kurslar[$kursAnahtari];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$kurs['baslik']?></title>
</head>
<body>
	<h1><?=$kurs['baslik']?></h1>
	<p><?=$kurs['aciklama']?></p>
	<h2>Eğitmen(ler)</h2>
	<ul>
		<?php foreach($kurs['egitmenler'] as $egitmen): ?>
		<li><?=$egitmen?></li>
		<?php endforeach; ?>
	</ul>
	<h2>Konular</h2>
	<ol>
		<?php foreach($kurs['konular'] as $konu): ?>
		<li><?=$konu?></li>
		<?php endforeach; ?>
	</ol>
	<hr>
	<a href="index.php">Kurs Listesine Dön</a>
</body>
</html>