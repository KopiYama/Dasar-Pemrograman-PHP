<?php


// Membuat array untuk menyimpan 1000 data integer secara acak
$data = [];
for ($i = 0; $i < 1000; $i++) {
    $data[] = rand(1, 1000); // Menghasilkan bilangan acak antara 1 sampai 1000
}

// Mencari nilai tertinggi dan terendah dari data
$nilai_tertinggi = max($data);
$nilai_terendah = min($data);

// Menghitung selisih
$selisih = $nilai_tertinggi - $nilai_terendah;

// Menampilkan hasil
echo "Nilai tertinggi dari 1000 data adalah: " . $nilai_tertinggi . PHP_EOL;
echo "Nilai terendah dari 1000 data adalah: " . $nilai_terendah . PHP_EOL;
echo "Selisih nilai tertinggi dan terendah dari 1000 data adalah: " . $selisih . PHP_EOL;

