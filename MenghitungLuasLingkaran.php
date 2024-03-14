<?php


// Menggunakan constant PI dengan nilai 3.14
define("PI", 3.14);

// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jari_jari)
{
    $luas = PI * $jari_jari * $jari_jari;
    return $luas;
}

// Menggunakan contoh jari-jari lingkaran
$jari_jari = 7;

// Memanggil fungsi untuk menghitung luas lingkaran
$luas_lingkaran = hitungLuasLingkaran($jari_jari);

// Menampilkan hasil
echo "Jari-jari lingkaran = " . $jari_jari . PHP_EOL;
echo "Luas lingkaran = " . $luas_lingkaran;


