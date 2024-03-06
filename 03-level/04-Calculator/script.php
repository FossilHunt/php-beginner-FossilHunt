<?php


$getal =readline("Welke operatie wil je uitvoeren? (+ of -)". PHP_EOL);

$getal1 =readline("Eerste getal?" . PHP_EOL);
$getal2 =readline("Tweede getal?" . PHP_EOL);

if ($getal === "+"){
    echo ($getal1 + $getal2);
} elseif ($getal === "-"){
    echo ($getal1 - $getal2);
}

