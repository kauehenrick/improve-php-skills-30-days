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

//Create a PHP script that replaces all occurrences of the word "cat" with "dog" in a given string, and then converts the modified string to uppercase.
function replaceCatDog($var)
{
    return str_replace("cat", "dog", $var);
}

echo replaceCatDog($var = "bird, parrot, rabbit, cat, elephant, hawk");

//Write a PHP script that concatenates the strings "Hello" and "World" with a space in between, and then extracts the substring "Hello" from the resulting string.
$x = "Hello";
$y = "World!";
echo $z = "$x $y \n";
echo substr($z, 0, 5);

//Create a PHP script that trims whitespace from both ends of the string " Hello, World! " and displays the result.
echo trim(" Hello, World! ");

//Define a constant named FAVORITE_COLOR with the value "Blue" using both define() and const. Print the constant values.
define("FAVORITE_COLOR", "Blue");
const FAVORITE_COLOR = "Blue";
echo FAVORITE_COLOR;

//Write a PHP script that uses the magic constant __FILE__ to display the full path of the current script file.
echo __FILE__;
