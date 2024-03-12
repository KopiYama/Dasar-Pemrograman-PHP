<?php

//function bintang(int $input)
//{
//    for ($i = $input; $i > 0; $i--) {
//        for ($j = $i; $j > 0; $j--) {
//            echo "*";
//        }
//        echo PHP_EOL;
//    }
//}
//
//bintang(3);

function penjumlahan(array $input)
{
    $jumlah = 0;
    foreach ($input as $value) {
        $jumlah += $value;
    }
    return $jumlah;
}

var_dump(penjumlahan([1,3,4,7,2,9,10]));