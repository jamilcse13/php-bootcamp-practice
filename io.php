<?php
// get any input and print it
echo "Type anything: ";
$line = trim(fgets(STDIN));
echo "You typed: " . $line . "\n";


// .... Enter an input and print a string ....
$a = readline('Enter a string: ');
echo "Hello ". $a . "\n";


// .... Enter a specific (int) type of input and print it ....
$b = (int)readline("Enter an integer: ");
print_r("The integer is: " . $b . "\n");


// .... Enter multiple input separating by a white space ....
// Input two int numbers and segragate it 
echo "Enter two int number: ";
list($var1, $var2) = explode(' ', readline());

// Typecasting to integers
$var1 = (int)$var1;
$var2 = (int)$var2;

print("The sum of " . $var1 . " and " . $var2 . " is " . $var1+$var2 . "\n");


// .... Input multiple int numbers in an array ....
echo "Enter multiple numbers: ";
$arr = explode(' ', readline());
// return an array
print_r($arr);


// input specific number of input using fscanf()
echo "Enter two int number: ";
fscanf(STDIN, "%d %d", $m, $n);

echo "The sum of " . $m . " and " . $n . " is " . ($m + $n) . "\n";
?>