<?php

for($break = 1; $break <= 100; $break++){
    echo "Ini Break ke-$break" . PHP_EOL;

    if($break >= 20){
        break;
    }
}

for($count = 1; $count <= 100; $count++){
    if($count % 3 == 0){
        continue;
    }

    echo "Continue :$count" .PHP_EOL;
}