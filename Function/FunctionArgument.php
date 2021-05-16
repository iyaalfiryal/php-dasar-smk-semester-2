<?php
// function sayHello($name)
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Iyal");
// sayHello("Fauzi");


// function sayHello($firstName, $lastName)
// {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// }

// sayHello("Hasna", "Fauzi");
// sayHello("Hafsah", "Fauzi");

// function sayHello($name = "empty")
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello();

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
