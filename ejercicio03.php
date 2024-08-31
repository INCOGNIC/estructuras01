<?php

$n = 5;
$esPrimo = true;
if ($n <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}
if ($esPrimo) {
    echo "$n es un número primo.";
} else {
    echo "$n no es un número primo.";
}
?>