<?php

//Dot operator
$name = "Mochamad Rizky Andika";

echo "Name\t: " . $name . PHP_EOL;
echo "Age\t: " . 23 . " Tahun" . PHP_EOL;

//Komversi Number
$valueString  = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.12";
var_dump($valueFloat);

//Mengakses karakter
$name = "Rizky";
echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;
echo $name[2]. PHP_EOL;
echo $name[3]. PHP_EOL;
echo $name[4]. PHP_EOL;

//Variable parsing
echo "Hello ".$name.", Selamat belajar PHP".PHP_EOL;
echo "Hello $name, Selamat belajar PHP".PHP_EOL;

//Curly brace
$var = "Rizky";
echo "This is {$var}s".PHP_EOL;