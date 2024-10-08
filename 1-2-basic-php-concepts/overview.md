## Introduction

- PHP code is executed on the server.

- _short echo tag_ - as it's possible to disable short tags, its use is unrecommended;

```php
    <?= 'this is a short tag' ?>
    <?php echo 'this is not a short tag' ?>
```

- If a file only contains PHP code, omit the PHP closing tag. 

- In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions **are not** case-sensitive.

- All variable names **are** case-sensitive!

- To make single line comments, use either // or #.

## Variables
- A variable starts with a _$_ sign followed by the variable name. Unlike other programming languages, PHP hasn't a command for declaring variables.

- PHP supports the following data types:
  - String
  - Integer
  - Float (floating point numbers - also called double)
  - Boolean
  - Array
  - Object
  - NULL
  - Resource

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
      - The _global_ keyword can be used to access a global variable from within a function:
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
    - **static**: locally declared variables usually are deleted after the function is executed. To maintain the local variables, is needed to use the _static_ keyword:
    ```php
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }
    ```
