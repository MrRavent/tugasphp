<?php

$jenis_bangun = "kubus";
$sisi = 5; 
$panjang = 8; 
$lebar = 6; 
$tinggi = 4;
$jari_jari = 3;
$tinggi_tabung = 10;
$volume = 0;

if ($jenis_bangun == "kubus") {
    $volume = $sisi * $sisi * $sisi;
} elseif ($jenis_bangun == "balok") {
    $volume = $panjang * $lebar * $tinggi;
} elseif ($jenis_bangun == "tabung") {
    $volume = 3.14 * $jari_jari * $jari_jari * $tinggi_tabung;
}

echo "Volume $jenis_bangun adalah: $volume";
?>
