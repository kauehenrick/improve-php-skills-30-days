## Introduction

- PHP code is executed on the server.

- *short echo tag* - as it's possible to disable short tags, its use is unrecommended;

```php
    <?= 'this is a short tag' ?>
    <?php echo 'this is not a short tag' ?>
```

- If a file only contains PHP code, omit the PHP closing tag. 

- In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions **are not** case-sensitive.

- All variable names **are** case-sensitive!

- To make single line comments, use either // or #.

## Variables
- A variable starts with a *$* sign followed by the variable name. Unlike other programming languages, PHP hasn't a command for declaring variables.

- PHP supports the following data types:
  - String
  - Integer
  - Float (floating point numbers - also called double)
  - Boolean
  - Array
  - Object
  - NULL
  - Resource

- If you want to change the type of a variable, without changing the value, you can use casting:
```php
$x = 5;
$x = (string) $x;
var_dump($x);
```

- var_dump() function returns the type of a variable:
```php
$x = 1234;
var_dump($x);
```

- To assign the same value to multiple variables:
```php
$x = $y = $z = "Fruit";
```

- PHP has three different variable scopes:
    - **local**: declared within a function and can only be used inside **that** function.
    - **global**: declared outside a function and can only be used outside a function.
      - The *global* keyword can be used to access a global variable from within a function:
        ```php
            $x = 5;
            $y = 10;

            function myTest() {
                global $x, $y;
                $y = $x + $y;
            }
        ```
       - PHP also stores all global variables in an array called _$GLOBALS[index]_.
        ```php
            $x = 5;
            $y = 10;

            function myTest() {
                $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
            }
        ``` 
    - **static**: locally declared variables usually are deleted after the function is executed. To maintain the local variables, is needed to use the *static* keyword:
    ```php
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }
    ```
## echo X print
- More or less the same, the differences are small:
  - Echo has no return value while print has return value of 1;
  - Echo can take multiple parameters;
  - Echo is usually faster than print;
  - Echo or print can be used without parentheses and contain HTML markup.

### Using single quotes
- When using double quotes, variables can be inserted to the string;
- When using single quotes, variables have to be inserted using the . operator;
- You can't break lines in single quotes.
```php
$var = 'Jayrock';

echo 'Hello, my name is ' . $var . '!' . PHP_EOL;
echo "Hello, my name is $var!";
```

## PHP Strings
- *strlen()* function returns the length of a string.

- *str_word_count()* function counts the number of words in a string.

- *strpos()* function searches for a specific text within a string:
```php
    strpos("Hello world!", "world");
```

- PHP has many different functions to modify strings, suach as converting to uppercase, lowercase, replace, revert, remove whitespaces and more.

### Slicing strings
- *substr()* function returns a range of characters.
  ```php
    $x = "Hello World!";
    echo substr($x, 6, 5);
  ```

- leaving out the length parameter, the range will go to the end.

- use negative indexes to start the slice from the end of the string.

### Escape character
- use a backslash \ followed by the character you want insert:
```php
    $x = "We are the so-called \"Vikings\" from the north.";
```

## PHP Numbers
- Three main numeric types:
  - Integer;
  - Float;
  - Number strings.
  
- In addition, PHP has two more data types:
  - Infinity;
  - NaN.

```php
    $a = 5;
    $b = 5.34;
    $c = "25";
    var_dump($a, $b, $c);
```

- A integer is a number without any decimal part (like 2, 256, -256, 10358, -179567).

- Even if 4 * 2.5 is 10, the result will be stored as float, because one of the operands is float.

- *is_numeric()* function can be used to check if a variabel is numeric:
```php
    $x = "5472";
    echo var_dump(is_numeric($x));
```

## PHP Casting
- Casting is used to change a variable from one data type to another specific type.
```php
    $a = 5;
    $b = 5.34;

    echo var_dump((string) $a);
    echo var_dump((int) $b);
```

## PHP Constants
- Constants in PHP are always upper case.

- *define()* function is used to create a constant, specifying first the name of the constant then the value.
```php
   define("GREETING", "You're Welcome!");
   echo GREETING; 
```

- *const* keyword also can be used:
```php
    const MYCAR = "Corsa";
    echo MYCAR;
```
- *const* **cannot** be created inside another block scope, like inside a function or inside an *if* statement.

- constants are automatically global across the entire script.

- PHP have some predfined constants, called Magic Constants, that change value depending on where they are used, like \_\_DIR\_\_ and \_\_CLASS_\_\.