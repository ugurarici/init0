<?php

$zarTahmini = $_POST['zartahmini'];

if($zarTahmini<1 || $zarTahmini>6) die("Doğru düzgün değer gir");

$zarAt = rand(1,6);
$zarAtmaSayisi = 1;

while($zarAt!=$zarTahmini){
	$zarAt = rand(1,6);
	$zarAtmaSayisi++;
}

echo "$zarAtmaSayisi tahminde, $zarTahmini bulundu";