<?php

$name = "Firman";

function sayhello(){
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sayhello();