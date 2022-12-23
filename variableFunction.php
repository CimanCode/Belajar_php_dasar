<?php

function foo(){
    echo "Ciman" . PHP_EOL;
}

function bar(){
    echo "abdul" . PHP_EOL;
}

$foonnew = "foo";
$foonnew();

function setValue($name, $filter){
    $finalname = $filter($name);
    echo "Hallo $finalname" . PHP_EOL;
}

function getValue(string $name): string{
    return "Sample $name";
}

setValue("Ciman", "getValue");