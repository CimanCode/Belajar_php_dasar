<?php

function sum(int $first, int $second){
    $total = $first + $second;
    return $total;
}

$values = sum(20,10) . PHP_EOL;
echo $values;

function getfinal(int $nilai){
    if($nilai > 90){
        return "A";
    } elseif($nilai > 80){
        return "B";
    } elseif($nilai > 70){
        return "C";
    } elseif($nilai > 60){
        return "D";
    } else {
        return "E";
    }
}

$value = getfinal(95);
echo $value;