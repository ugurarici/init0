<?php

// $articles = array(
// 	array(
// 		'title' => "Başlık",
// 		'content' => "İçerik",
// 	),
// 	array(
// 		'title' => "Başlık 2",
// 		'content' => "İçerik 2",
// 	),
// 	array(
// 		'title' => "Başlık 3",
// 		'content' => "İçerik 3",
// 	),
// );

// $articlesJson = json_encode($articles);
// file_put_contents("data.json", $articlesJson);

$articlesJson = file_get_contents("data.json");
$articles = json_decode($articlesJson, true);


