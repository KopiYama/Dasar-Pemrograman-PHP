<?php


// Fungsi untuk menghitung luas segi empat
function hitungLuasSegiEmpat($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

// Inisialisasi panjang dan lebar yang sama
$panjang_dan_lebar = 8;

// Menghitung luas 5 buah segi empat dengan panjang dan lebar yang sama
for ($i = 1; $i <= 5; $i++) {
    $luas_segi_empat = hitungLuasSegiEmpat($panjang_dan_lebar, $panjang_dan_lebar);
    echo "Luas segi empat ke-$i = " . $luas_segi_empat . PHP_EOL;
}

