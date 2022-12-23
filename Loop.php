<?php

for($count = 1; $count <= 10; $count++){
    echo "Ini Perluangan ke-$count" . PHP_EOL;
}

// while lopp

$counter = 1;

while($counter <= 10){
    echo "Ini perulangan while ke-$counter" . PHP_EOL;
    $counter++;
} 

// do while loop

$counters = 1;

do{
    echo "Ini perulangan do while ke-$counters" . PHP_EOL;
    $counters++;
} while ($counters <= 10);