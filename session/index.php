<?php

//	sayı tahmini oyunu
//	kullanıcı gelip oyunu başlat der
//	oyun başladığında bu oyun için 1,100 arasında bir sayı yaratılır, kullanıcıya gösterilmez, hafızada tutulur
//	kullanıcıdan en az tahminle hafızadaki sayıyı bulması beklenir

//	bunun için php'deki SESSION özelliğini kullanacağız
session_start();

if( ! isset($_SESSION['number'])):
	?>
	Sayı tahmini oyununa hoşgeldiniz!<br>
	<a href="baslat.php">Oyunu Başlat</a>
	<?php
else:
	$message = "lütfen tahminizi girin";
	if(isset($_POST['number'])) {
		$_SESSION['guess_count']++;
		if($_POST['number']==$_SESSION['number']){
			$_SESSION['is_finished'] = true;
			$message = "Oyunu tamamladınız, tebrikler!";
		} elseif ($_POST['number']>$_SESSION['number']) {
			$message = "Sayı, tahmin ettiğinizden daha küçük";
		} elseif ($_POST['number']<$_SESSION['number']) {
			$message = "Sayı, tahmin ettiğinizden daha büyük";
		}
	}
	?>
	<p>
		<?=$message?><br>
		Tahmin sayısı: <?=$_SESSION['guess_count']?>
	</p>
	<?php if(! $_SESSION['is_finished']): ?>
		<form method="post">
			<input type="number" name="number"><br>
			<button type="submit">Tahminde Bulun</button>
		</form>
	<?php else: ?>
		<br>
		<a href="baslat.php">Yeniden Başlat</a>
	<?php endif; ?>
	<hr>
	oyun başlamış<br>
	<a href="iptal.php">Oyunu İptal Et</a>
<?php endif; ?>