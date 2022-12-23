<?php

$data = ["Firman", "Abdul", "Rohman"];

for($i = 0; $i < count($data); $i++){
    echo "Data $i = $data[$i]" . PHP_EOL;
}

foreach($data as $data => $datas){
    echo "Data $data = $datas" . PHP_EOL;
}

$counter = [
    "first_nama" => "Firman",
    "midle_name" => "Abdul",
    "last_name" => "rohman"
];

foreach($counter as $key => $value){
    echo "data = $key : $value" . PHP_EOL;
}