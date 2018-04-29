<?php

$degisken = "Uğur";

$dogumYili = 1993;

$kucukCocukYasi = 6.5;

$dovuMuSamet = true;

$yokKi = null;

$hobilerim = array("konuşmak", "yemek yemek");

echo $degisken;
echo "<br>";
echo date('Y')-$dogumYili;

$degisken = 34.5;
echo "<br>";
echo $degisken;

echo "<hr>";

if(date('Y')-$dogumYili < 18) {
	echo "Reşit değilmiş";
}elseif (date('Y')-$dogumYili == 18) {
	echo "Yeni reşit olmuş";
}else{
	echo "Reşit olalı biraz olmuş";
}

$meyve = "cilek";
$fiyat = null;

switch ($meyve) {
	case 'cilek':
		$fiyat = 6;
		break;

	case 'erik':
		$fiyat = 5;
		break;
	
	default:
		$fiyat = "bu meyve bizde yok";
		break;
}
echo "<hr>";
echo $meyve . " - fiyatı: " . $fiyat;
echo "<hr>";

// döngüler
for($i=1; $i<=14; $i++) {
	if($i>4 && $i<14) continue;
	echo $i . " mumdur <br>";
}
echo "bana bi bade doldur";
echo "<hr>";

foreach ($hobilerim as $hobi) {
	echo $hobi . "<br>";
}

echo "<hr>";

$zarAt = rand(1,6);
$zarAtmaSayisi = 1;

while ($zarAt!=4) {
	$zarAt = rand(1,6);
	$zarAtmaSayisi++;
}

echo $zarAtmaSayisi . " denemede 4 bulundu";

echo "<hr>";

$zarAtmaSayisi = 0;
do{
	$zarAt = rand(1,6);
	$zarAtmaSayisi++;
}while($zarAt!=4);

echo $zarAtmaSayisi . " denemede 4 bulundu";

// fonksiyonlar

function selamVer($isim)
{
	return "Merhaba $isim!<br>";
}

function opsiyonelSelamVer($isim=null)
{
	return "Merhaba $isim!<br>";
}

echo "<hr>";

echo selamVer("Uğur");

echo "<hr>";

echo opsiyonelSelamVer();

echo "<hr>";

echo opsiyonelSelamVer("Çağla");








