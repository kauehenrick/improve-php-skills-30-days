## Changing the MySQL Port in XAMPP

Another option is to change the port of MySQL in XAMPP from 3306 to something else (like 3308).

### Procedure

Here is how to do it:

1. Open XAMPP.

2. Stop all the running XAMPP services.

3. Go to "Config" at the top-right corner of the XAMPP window, click on "Service and Port Settings," go to the "MySQL" tab, and change the "Main Port" to 3308 or something else.

4. Now, in XAMPP, click on "Config" in the MySQL row (click on MySQL's "Config") and open `my.ini`.

5. `my.ini` will open in Notepad. Go to line 20 (it can be some other line as well) and change the port to 3308, like this:

    ```ini
    # password = your_password
    port = 3308
    ```

6. Also, change the port to 3308 on line 28 of the `my.ini` file, like this:

    ```ini
    # The MySQL server
    [mysqld]
    port = 3308
    ```

7. Save the changes.

8. Restart XAMPP (if you are still not able to start the MySQL service, restart your computer).

You have successfully changed the MySQL port, BUT WAIT, there is something else you need to do.

9. Now go to `C:\xampp\phpMyAdmin` (your directory where XAMPP is installed; it may be different depending on where you have installed XAMPP). Open the `config.inc.php` file.

10. Below the user, password, and extension lines at the top of the file (below line 23), add this line:

    ```php
    $cfg['Servers'][$i]['port'] = 3308;
    ```

    (If you don't follow step 10, this error will occur while opening "phpMyAdmin": **(HY000/2002): No connection could be made because the target machine actively refused it.**)

11. Save the changes.

12. Also, from now on, in every new project, you will have to mention this new port in your project code. Here is an example:

    ```php
    // After changing the port:
    // Connecting MySQL Database with PHP:
    $conn = mysqli_connect("localhost:3308", "root", "", "database_name");
    ```

The first parameter/argument of `mysqli_connect` is now `localhost:3308`, instead of just `localhost`.