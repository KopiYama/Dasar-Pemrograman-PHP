<?php

function perkalian(array $angka)
{
    $result = 1;
    foreach($angka as $sementara) {
        $result *= $sementara;

    }
    return $result;
}

echo perkalian([4, 5, 9, 3]);