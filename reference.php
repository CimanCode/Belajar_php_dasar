<?php

$name = "ciman";

$othername = &$name; //refernce
$othername = "Firman" . PHP_EOL;

echo $name;

// reference parameter

function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// reference return value

function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();

echo $b . PHP_EOL;