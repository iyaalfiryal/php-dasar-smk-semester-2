<?php
//perulangan tanpa henti
for (; ;) {
    echo "Hello for looping" . PHP_EOL;
}

//perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//perulangan dengan init statement
for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//perulangan dengan post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

//perulangan decrement
for ($counter = 10; $counter <= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

//perulangan increment menggunakan syntax alternatif
for ($counter = 1; $counter <= 5; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

//perulangan decrement menggunakan syntax alternatif
for ($counter = 5; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
