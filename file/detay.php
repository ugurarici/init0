<?php
//	okunmak istenen makalenin detay sayfası
//	veri dizisinden okunacak, ekrana basılacak
require "data.php";
$articleId = $_GET['id'];
$article = $articles[$articleId];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$article['title']?></title>
</head>
<body>
	<h1><?=$article['title']?></h1>
	<p>
		<?=$article['content']?>
	</p>
	<hr>
	<a href="index.php">Listeye Dön</a>
</body>
</html>