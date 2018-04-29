<?php
$color = "black";
if(isset($_COOKIE['color'])) $color = $_COOKIE['color'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookie Renkler</title>
	<style>
		p{
			color: <?=$color?>;
		}
	</style>
</head>
<body>
	<ul>
		<li><a href="changecolor.php?color=blue">mavi</a></li>
		<li><a href="changecolor.php?color=purple">mor</a></li>
		<li><a href="changecolor.php?color=green">yeşil</a></li>
		<li><a href="changecolor.php?color=yellow">sarı</a></li>
		<li><a href="changecolor.php?color=orange">turuncu</a></li>
	</ul>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae expedita, ipsum nam ex velit qui eius aperiam minima soluta quasi ut exercitationem iusto maxime aliquid voluptas commodi natus odit?
	</p>
</body>
</html>