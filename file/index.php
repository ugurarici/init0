<?php

//	makale başlığı ve içeriğini bir formdan girip kaydetmek istiyoruz
//	ana sayfada bunlar listelensin
//	herhangi birine basınca da detayı görüntülensin istiyoruz

require "data.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Makaleler</title>
</head>
<body>
	<ul>
		<?php foreach($articles as $key => $article): ?>
			<li>
				<a href="detay.php?id=<?=$key?>">
					<?=$article['title']?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<hr>
	<a href="ekle.php">Yeni Ekle</a>
</body>
</html>



