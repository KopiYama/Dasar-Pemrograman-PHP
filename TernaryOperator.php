<?php

$gender = "PRIA";
$hi = null;

//if ($gender = "PRIA"){
//    $hi = "Hallo bro";
//} else{
//    $hi = "Hallo nona";
//}

$hi = $gender == "PRIA" ? "Hallo bro" : "Hallo nona";

echo $hi . PHP_EOL;