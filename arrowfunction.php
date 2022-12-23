<?php

$first = "Firman";
$last = "Abdul";

$arrowFunction = fn() => "Helloo $first $last" . PHP_EOL;

echo $arrowFunction();