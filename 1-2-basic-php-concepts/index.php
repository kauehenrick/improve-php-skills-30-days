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
