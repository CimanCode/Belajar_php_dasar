<?php

$nomer = array(1,2,3,4,5);
var_dump($nomer);
$name = ["Firman", "Abdul", "Rohaman"];
var_dump($name);

var_dump($name[0]);

$name[1] = "Ciman";
var_dump($name);

unset($name[0]);
var_dump($name);

$name[] = "firman";
var_dump($name);

var_dump(count($name));

// Array Map

$name = [
    "id" => "0AS98",
    "Name" => "Firman Abdul Rohman",
    "age" => 20,
    "address" => [
        "city" => "Tasikmalaya",
        "country" => "Indonesia"
    ]
];

var_dump($name["address"]);
var_dump($name["id"]);