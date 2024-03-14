<?php


// Function untuk menghitung biaya parkir
function hitungBiayaParkir($jenis_kendaraan, $jam_pertama, $jam_berikutnya, $jam_parkir)
{
    // Tarif awal
    $tarif_pertama_motor = 1000;
    $tarif_pertama_mobil = 2000;

    // Tarif per jam berikutnya
    $tarif_berikutnya_motor = 500;
    $tarif_berikutnya_mobil = 1000;

    // Tarif di hari Sabtu dan Minggu
    $tarif_weekend = 500;

    // Biaya parkir lebih dari 8 jam
    $biaya_lebih_8_jam = 50000;

    // Menghitung biaya parkir
    $biaya_parkir = 0;

    // Mengecek jenis kendaraan dan hari parkir
    if ($jenis_kendaraan == 'motor') {
        // Jika hari Sabtu atau Minggu
        if ($jam_pertama == $tarif_pertama_motor + $tarif_weekend) {
            $biaya_parkir = $tarif_pertama_motor + $tarif_weekend;
        } else {
            $biaya_parkir = $tarif_pertama_motor;
        }

        if ($jam_parkir > 1) {
            $biaya_parkir += ($jam_parkir - 1) * $tarif_berikutnya_motor;
        }

    } elseif ($jenis_kendaraan == 'mobil') {
        // Jika hari Sabtu atau Minggu
        if ($jam_pertama == $tarif_pertama_mobil + $tarif_weekend) {
            $biaya_parkir = $tarif_pertama_mobil + $tarif_weekend;
        } else {
            $biaya_parkir = $tarif_pertama_mobil;
        }

        if ($jam_parkir > 1) {
            $biaya_parkir += ($jam_parkir - 1) * $tarif_berikutnya_mobil;
        }

    }

    // Mengecek jika parkir lebih dari 8 jam
    if ($jam_parkir > 8) {
        $biaya_parkir = $biaya_lebih_8_jam;
    }

    return $biaya_parkir;
}

// Contoh kasus: parkir pada hari Sabtu menggunakan mobil selama 10 jam
$jenis_kendaraan = 'mobil';
$jam_pertama = 2000; // Tarif pertama mobil pada hari Sabtu
$jam_berikutnya = 1000; // Tarif berikutnya mobil pada hari Sabtu
$jam_parkir = 10; // Lama parkir

// Menghitung biaya parkir
$biaya_parkir = hitungBiayaParkir($jenis_kendaraan, $jam_pertama, $jam_berikutnya, $jam_parkir);

// Menampilkan hasil
echo $biaya_parkir;

