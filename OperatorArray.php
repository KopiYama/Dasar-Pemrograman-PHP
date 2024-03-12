<?php

$first = [
    "first name" => "Mochamad"
];

$last = [
    "last name" => "Andika"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first name" => "Mochamad",
    "last name" => "Andika"
];

$b = [
    "last name" => "Andika",
    "first name" => "Mochamad"
];

var_dump($a == $b);
var_dump($a === $b);
