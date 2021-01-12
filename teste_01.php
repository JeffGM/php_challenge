<?php

function customSum($positiveInteger) {
    if(!is_integer($positiveInteger))
        throw new Exception("The input must be an integer!");
    if($positiveInteger <= 0)
        throw new Exception("The integer must be greater than 0!");

    $sum = 0;

    for($i = 1; $i < $positiveInteger; $i++) {
        if($i % 3 == 0 || $i % 5 == 0)
            $sum += $i;
    }

    return $sum;
}

$testNumber = 10;
echo "Teste - Entrada: " . $testNumber . PHP_EOL . "Saída: " .  customSum($testNumber);