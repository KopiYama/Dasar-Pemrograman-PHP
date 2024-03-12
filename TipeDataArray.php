<?php

$values = array(1, 2, 3, 4, 1.2);
var_dump($values);

$name = ["mochamad", "rizky", "andika"];
var_dump($name);

var_dump($name[0]);

$name[0] = "Mochamad";
var_dump($name);

unset($name[2]);
var_dump($name);

$name[] = "Andika";
var_dump($name);

var_dump(count($name));

$name2 = array(
    "id" => 10219019,
    "name" => "Mochanmad Rizky Andika",
    "age" => 23,
    "Alamat" => [
        "kota" => "Garut",
        "negara" => "Indonesia"
    ]
);

var_dump($name2);

var_dump($name2["id"]);

var_dump($name2["Alamat"]["kota"]);