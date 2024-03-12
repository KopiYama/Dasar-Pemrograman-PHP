<?php
//function printUpFacingTriangle($input) {
//    for ($i = 0; $i < $input ; $i++) {
//        for ($k = 1; $k < $input - $i; $k++) {
//            echo " ";
//        }
//        for ($j = 0; $j <= $i; $j++) {
//            echo "*";
//        }
//        echo PHP_EOL;
//    }
//}
//
//printUpFacingTriangle(4);
//

function hitungPerkalianArray(array $arr)
{
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}

// Contoh penggunaan
$nilaiArray = [1, 2, 3, 4];
$hasilPerkalian = hitungPerkalianArray($nilaiArray);

echo $hasilPerkalian;


?>

