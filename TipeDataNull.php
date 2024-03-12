<?php

$name = "Rizky";
$name = null;

$age = null;

echo "Name\t: ";
echo $name;
echo "\n";

echo "Age\t: ";
echo $age;
echo "\n";

echo "Is name null ?\t: ";
echo is_null($name);
echo "\n";

$name = "Rizky";

echo "Is name null ?\t: ";
echo is_null($name);
echo "\n";

echo "Is name null ?\t: ";
var_dump(is_null($name));

$contoh = 123;
unset($contoh); //untuk menghapus variable contoh
var_dump(isset($contoh));

echo "\n";

$contoh = 123;
var_dump(isset($contoh));