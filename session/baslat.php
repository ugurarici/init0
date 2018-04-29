<?php

//	oyunu başlatacak işlemleri yapacağız
session_start();

$_SESSION['number'] = rand(1,100);
$_SESSION['guess_count'] = 0;
$_SESSION['is_finished'] = false;

header('Location: index.php');