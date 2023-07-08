<?php

$code = '';

while(true) {
    $input = readline('php > ');

    if ($input == 'exit') {
        break;
    }

    if (strpos($input, ';') === false) {
        $code .= $input . PHP_EOL;
        continue;
    }

    $code .= $input;
    eval($code);

    echo PHP_EOL;

    $code = '';
}