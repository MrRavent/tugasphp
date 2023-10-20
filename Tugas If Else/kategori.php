<?php
$nama = "John"; //Input Nama
$tinggi = 170; //Input Tinggi
$berat_badan = 70; //Input Berat (Kg)

// Menghitung BMI
$tinggi_m = $tinggi / 100; // Konversi cm ke m
$bmi = $berat_badan / ($tinggi_m * $tinggi_m);

// Menentukan BMI
if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kategori = "sedang";
} else {
    $kategori = "gemuk";
}

// Output
echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori.";
?>
