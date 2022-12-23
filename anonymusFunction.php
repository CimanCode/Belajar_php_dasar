<?php

$helloSay = function(string $name){
    echo "Hello $name" . PHP_EOL;
};

$helloSay("Ciman") . PHP_EOL;

function SayGoodBy(string $say, $filter){
    $fileName = $filter($say);
    echo "Say Good By $fileName" . PHP_EOL;
}

SayGoodBy("Firman", function(string $say):string{
    return $say;
});

$firstName = "Firman";
$midelName = "Abdul";
$lastName = "Rohman";

$sayHelloCima = function() use($firstName, $midelName, $lastName){
    echo "Hello $firstName $midelName $lastName" . PHP_EOL;
};
$sayHelloCima();

