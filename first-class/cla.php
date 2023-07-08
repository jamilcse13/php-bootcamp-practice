<?php

array_shift($argv);
$elements = '';

foreach ($argv as $arg) {
    $elements .= $arg . " ";
}

print("Enter any number from below. \n
1 Get the entered numbers list
2 Get the sum of the entered numbers
3 Get the binary value of the of each numbers \n\n");

$input = (int)readline("You select option : ");

switch ($input) {
    case 1:
        printf("The entered numbers are : %s", $elements);
        break;
    
     case 2:
        printf("The sum of the entered numbers is: %d", array_sum($argv));
        break;
    
    case 3:
        $binary_value_ofeach_array_elements[] = array_map('integerToBinary', $argv);
        print_r("The binary value of the of each numbers are: \n" . implode("\n", $binary_value_ofeach_array_elements[0]));
        break;
    
    default:
        echo "You didn't select any of those";
        break;
}

echo PHP_EOL;

function integerToBinary(int $a)
{
    return $a  .' : ' . decbin($a);
}
?>