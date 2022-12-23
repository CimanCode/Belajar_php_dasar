<?php

function sayHello(string $nama, callable $filter){
    $fileName = call_user_func($filter, $nama);
    echo "Hay $fileName";
}

sayHallo('Eko');
sayHallo("Ciman", function(string $nama):string{
    return $nama;
});