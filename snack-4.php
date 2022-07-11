<?php
    $listaNumeri = [];
    $counter = 0;

while (count($listaNumeri) < 15) {
    $num = rand(1, 100);

    if (!in_array($num, $listaNumeri)) {
        $listaNumeri[] = $num;
    }

    $counter++;
}

var_dump($counter);
var_dump($listaNumeri);

