<?php

$code = '';

while(true) {
    $input = readline('php > ');
    var_dump($input);
    die;

    if ($input == 'exit') {
        break;
    }

    if (strpos($input, '?>') === false) {
        $code .= $input . PHP_EOL;
        var_dump($code, $input);
        continue;
    }

    $code .= $input;
    eval($code);

    echo PHP_EOL;

    $code = '';
}