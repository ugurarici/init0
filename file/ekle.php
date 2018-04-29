<?php
require "data.php";

if(isset($_POST['title']) && isset($_POST['content'])){
	$newArticle = array(
		"title" => $_POST['title'],
		"content" => $_POST['content']
	);
	$articles[] = $newArticle;
	$newArticlesJson = json_encode($articles);
	file_put_contents("data.json", $newArticlesJson);
	header("Location: index.php");
}

?>
<form method="post">
	<input type="text" name="title"><br>
	<textarea name="content"></textarea>
	<br>
	<button type="submit">Ekle</button>
</form>