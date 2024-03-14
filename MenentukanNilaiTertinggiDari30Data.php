<?php


// Array dengan 30 data acak
$data = [];
for ($i = 0; $i < 30; $i++) {
    $data[] = rand(1, 100);
}

// Menentukan nilai tertinggi
$nilai_tertinggi = max($data);

// Tampilkan data dan nilai tertinggi
echo "Data: " . implode(", ", $data) . PHP_EOL;
echo "Nilai tertinggi: " . $nilai_tertinggi;

