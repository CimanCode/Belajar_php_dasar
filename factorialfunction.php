<?php

function factorial(int $value) : int
{
    $total = 1;

    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorial(6));

function factorialRecursive(int $values) : int{
    if($values == 1){
        return 1;
    } else {
        return $values * factorialRecursive($values- 1);
    }
}

var_dump(factorialRecursive(5));

function loop(int $value){
    if($value == 0){
        echo "End loop " . PHP_EOL;
    } else {
        echo"Lopp-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);