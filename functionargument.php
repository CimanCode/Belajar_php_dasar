<?php

function hello($name, $lastname, $age = " "){
    echo "Hello $name $lastname $age" . PHP_EOL;
}

hello("Firman", "Ciman", 20);
hello("Firman", "Ciman");


function sum(int $first, int $last){
    $total = $first * $last;
    echo "Total $first * $last = $total" . PHP_EOL;
}

sum(20,30);
sum("40","20");

// variable argument list
function sumall(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }

    echo "Total " . implode(",",  $values) . " = $total" . PHP_EOL;
}
$values =[1,3,4,5,5,6,6,8];
sumall(1,2,3,4,5,6);

sumall(...$values);