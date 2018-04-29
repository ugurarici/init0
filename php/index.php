<?php
require "data.php";
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>INIT 0</h1>
	<p>
		Eskişehir Anadolu Üniversitesinde gerçekleştirilen INIT0 etkinliği izdihama yol açtı.
	</p>
	<p>
		Dünyanın dört bir yanından gelen insanlar, ezilmek pahasına sınıflara akın etti.
	</p>
	<img src="https://matteroffactsblog.files.wordpress.com/2013/08/685594.jpg" alt="INIT 0 girişi" height="100">
	<h2>Eğitimler - <?=count($kurslar)?> adet</h2>
	<ul>
		<?php foreach ($kurslar as $key => $kurs): ?>
			<li>
				<a href="kurs.php?id=<?=$key?>">
					<?=$kurs['baslik']?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
