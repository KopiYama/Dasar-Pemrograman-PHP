<?php


// Fungsi untuk menghasilkan array dengan 3000 angka acak antara 1 dan 100
function generateRandomNumbers()
{
    $numbers = array();
    for ($i = 0; $i < 3000; $i++) {
        $numbers[] = rand(1, 100);
    }
    return $numbers;
}

// Fungsi untuk menghitung rata-rata dari array angka
function calculateAverage($numbers)
{
    $total = array_sum($numbers);
    $count = count($numbers);
    $average = $total / $count;
    return $average;
}

// Menghasilkan array dengan 3000 angka acak antara 1 dan 100
$random_numbers = generateRandomNumbers();

// Menghitung rata-rata dari array angka
$average = calculateAverage($random_numbers);

// Menampilkan hasil
echo "3000 angka acak: ". PHP_EOL;
echo implode(", ", $random_numbers) . PHP_EOL;
echo "Rata-rata dari 3000 angka tersebut adalah: " . $average;

