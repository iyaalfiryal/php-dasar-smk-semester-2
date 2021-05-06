<?php
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi Sis!";
}

// echo $hi;

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi sis!";

echo $hi . PHP_EOL;
