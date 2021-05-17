<?php

function createName()
{
    $name = "IDN"; // local scope
}

createName();
echo $name . PHP_EOL;