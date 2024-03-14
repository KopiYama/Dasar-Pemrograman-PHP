<?php

// Mendefinisikan total belanja dan merk minyak goreng yang dibeli
$total_belanja = 1200000; // Ubah nilainya sesuai total belanja
$merk_minyak_goreng = "SSS"; // Ubah sesuai merk minyak goreng yang dibeli

// Inisialisasi diskon
$diskon = 0;

// Mengecek apakah total belanja > 1 juta
if ($total_belanja > 1000000) {
    // Jika merk minyak goreng adalah "SSS", diskon 10%
    if ($merk_minyak_goreng === "SSS") {
        $diskon = 0.10;
    } else {
        // Jika tidak, diskon 5%
        $diskon = 0.05;
    }
}

// Menghitung total diskon
$total_diskon = $total_belanja * $diskon;

// Menghitung total yang harus dibayar setelah diskon
$total_bayar = $total_belanja - $total_diskon;

// Menampilkan hasil
echo "Total belanja: Rp " . number_format($total_belanja, 2, ',', '.') . PHP_EOL;
echo "Merk minyak goreng: " . $merk_minyak_goreng . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total diskon: Rp " . number_format($total_diskon, 2, ',', '.') . PHP_EOL;
echo "Total yang harus dibayar: Rp " . number_format($total_bayar, 2, ',', '.') . PHP_EOL;

