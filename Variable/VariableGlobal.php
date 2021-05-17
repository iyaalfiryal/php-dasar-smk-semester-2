<?php
$name = "IDN"; // global scope

function sayHello()
{
    global $name; // global keyword
    echo $name . PHP_EOL;
}

sayHello();
