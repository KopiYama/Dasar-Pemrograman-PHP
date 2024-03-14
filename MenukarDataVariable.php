<?php

// Mendefinisikan nilai awal
$a = 3;
$b = 4;

echo "Sebelum pertukaran:". PHP_EOL;
echo "a = " . $a . PHP_EOL;
echo "b = " . $b . PHP_EOL;

// Menukar nilai a dan b
$temp = $a;
$a = $b;
$b = $temp;

echo "Setelah pertukaran:" . PHP_EOL;
echo "a = " . $a . PHP_EOL;
echo "b = " . $b . PHP_EOL;

