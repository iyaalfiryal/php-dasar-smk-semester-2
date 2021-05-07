<?php


$first = [
    "first_name" => "Elina"
];

$last = [
    "first_name" => "Nadia",
    "last_name" => "Hasna"
];

// $full = $first + $last;
// var_dump($full);

$a = [
  "first_name" => "Elina",
  "last_name" => "Hasna"
];

$b = [
  "last_name" => "Hasna",
  "first_name" => "Elina"
];

var_dump($a == $b);
var_dump($a === $b);
