<?php
$commandHistory = array();

while(true) {
    $input = readline("unix command > "); // Read user input
    $parts = explode(" ", $input); // Split input into command and arguments

    $command = $parts[0];
    $arguments = array_slice($parts, 1);

    $output = [];
    exec($command . ' ' . implode(' ', $arguments), $output); // Execute the command

    if (!empty($output)) {
        echo implode("\n", $output) . "\n"; // Print the output

        $commandHistory[] = $input;
    } else {
        if ($input === 'exit') {
            break;
        } elseif ($input == 'history') {
            echo implode("\n", $commandHistory) . PHP_EOL;
            continue;
        }
        echo "The command doesn't exists" . PHP_EOL;
    }
}

?>