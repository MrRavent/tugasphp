<?php

$jenis_bangun = "persegi"; //Ganti Dengan Jenis Bangun
$x = 5;
$y = 3;

$luas = 0;

if ($jenis_bangun == "persegi") {
    $luas = $x * $x;
} elseif ($jenis_bangun == "persegi_panjang") {
    $luas = $x * $y;
} elseif ($jenis_bangun == "segitiga") {
    $luas = 0.5 * $x * $y;
} elseif ($jenis_bangun == "lingkaran") {
    $luas = 3.14 * $x * $x;
} elseif ($jenis_bangun == "trapesium") {
    $luas = 0.5 * ($x + $y) * $y;
}

echo "Luas $jenis_bangun adalah: $luas";
?>