<?php
// 1. Data from web forms can be accessed using the superglobal arrays $_GET and $_POST. 



// 2. $_GET: for accessing data in the query string – the key=value pairs that appear in the URL after the “?” character. All values are unescaped (+ is converted to space, etc.)

/* Example:

http: //www.example.com/myscript.php?custname=Bob+Smith&custage=21
$name = $_GET["custname"]; // $name is "Bob Smith" 
$age = $_GET["custage"]; // $age is 21 

*/


// 3. $_POST: for accessing posted for data from standard input.


// 4. isset : It’s always a good idea to use isset to check if the variable exists in $_POST and $_GET before accessing to avoid PHP warnings.

/* What does isset ($_ POST [' submit '] mean ?
How to check form submission in PHP ? - GeeksforGeeks
Use isset() method in PHP to test the form is submitted successfully or not. In the code, use isset() function to check $_POST['submit'] method. Remember in place of submit define the name of submit button. After clicking on submit button this action will work as POST method 
*/


// 5. extract : Shortcut to accessing variables in $_GET and $_POST

?>