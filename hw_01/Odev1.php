<?php

/* bu kod ogrencilerin notlarini buyukten kucuge siralar, en yuksek ve en dusuk notu,
notlarin standart sapmasini ve ortalamasini bulur */

echo "Notlar: ";
echo "<br><br>";
$notlar = [ 
		"ali" => 50,
		"veli"=> 60,
		"ayse"=>80,
		"filiz"=>100,
		"mehmet"=>65,
		"deniz"=>20,
		"derya"=>65
		];
		
arsort($notlar);  //Sort Array (Descending Order), According to Value - arsort() array_reverse sort

$max= -999;
$min= 999;
$toplam=0; $ortalama=0;
$standartSapma=0;
foreach ( $notlar as $isim => $not)
{
	echo "-> ". $isim . " : " . $not . "<br>";
	if( $not > $max ) { $max = $not; }
	if( $not < $min ) { $min = $not; }
	$toplam += $not;
}
$ortalama = $toplam / count($notlar);
echo "<br>";
echo "En yuksek not: ".$max. "<br>";
echo "En düsük not: ". $min . "<br>";
echo "Ortalama: ". $ortalama. "<br>";

$standartSapmaDegeri = standartSapma($notlar,count($notlar),$ortalama);
echo "Standart sapma: ". $standartSapmaDegeri. "<br>";

function standartSapma ( $dizi, $elemanSayisi, $sinifOrtalamasi)
{		
	$karelerinFarklariToplami = 0;
	foreach ( $dizi as $isim => $not)
	{
		$karelerinFarklariToplami += pow(($not - $sinifOrtalamasi), 2);
	}
	return sqrt($karelerinFarklariToplami / $elemanSayisi-1);
}
                   

?>