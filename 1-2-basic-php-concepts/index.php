<?php
//Write a PHP script that demonstrates the difference between local and global variable scopes. Include a function that modifies a global variable and explain the output.
$var = 'Global Variable';

function setLocalVariable()
{
    return $var = 'Local Variable';
}

function changeGlobalVariable()
{
    $GLOBALS['var'] = 'New Global Variable';
}

echo $var . "\n";
echo setLocalVariable() . "\n";
changeGlobalVariable();
echo $var;

//Create a function that uses a static variable to count how many times the function has been called. Each time the function is executed, it should print the count.
function counter()
{
    static $counter = 0;
    $counter += 1;
    echo "A função foi chamada " . $counter . " vez(es) \n";
}

counter();
counter();
counter();

//Write a function that takes a variable as input and returns its data type using var_dump(). For example, if the input is 42, it should return "integer".
function returnType($var)
{
    return var_dump($var);
}

echo returnType(42);
echo returnType('integer');

//Write a PHP script that assigns the same string value to three different variables in one line and then outputs each variable to show they hold the same value.
$a = $b = $c = "same value \n";

echo $a . $b . $c;

//Implement a function that takes two boolean variables and returns true if both are true, and false otherwise. Demonstrate this with various combinations of boolean inputs.

//