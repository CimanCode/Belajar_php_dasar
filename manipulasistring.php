<?php

$valueName = "Firman Abdul Rohman";

echo "Nama :" . $valueName;
echo "Age :" . 20 , PHP_EOL;

// konversi string
var_dump((int)"100") . PHP_EOL;

var_dump((string)"Firman") . PHP_EOL;

// memgakses data string

echo $valueName[0] . PHP_EOL;
echo $valueName[1] . PHP_EOL;
echo $valueName[2] . PHP_EOL;
echo $valueName[3] . PHP_EOL;
echo $valueName[4] . PHP_EOL;
echo $valueName[5] . PHP_EOL;
echo $valueName[6] . PHP_EOL;

// varsing variable

echo "Hello, $valueName Selamat belajar php" . PHP_EOL;

// curly brace

$name = "Firman";

echo "Hallo, {$name}s";