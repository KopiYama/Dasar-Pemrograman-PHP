<?php

function DeteksiDuplikat($inputString)
{
    $array = str_split($inputString);
    $hitungArray = array_count_values($array);

    var_dump($hitungArray);
    echo "Hasil: ";
    foreach ($hitungArray as $letter => $count){
        if ($count > 1) {
            echo "$letter, ";
        }
    }
}

DeteksiDuplikat("enigmacamp");
