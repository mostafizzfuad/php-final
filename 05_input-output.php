<!-- 
1.  print and echo are used to print to the browser.
        - print can only accept one argument
        - echo can accept any number of arguments
 -->

<?php
echo ("hello world !!");  // same thing
print("hello world !!");  // same thing
?>



<!-- 2. Variables are interpolated inside of strings unless single quotes are used. -->

<?php
$a = "guts";
echo "You have $a."; // prints "You have guts."
echo 'You have $a.'; // prints "You have $a."
?>


<!-- 3. Escape sequences: 
        \n (newline), 
        \r (carriage-return), 
        \t (tab), 
        \$ ($), 
        \” (“), 
        \\ (\) 
-->

<?php
echo "a\\b\tc\$d"; // prints "a\b   c$d"
echo 'a\\b\tc\$d'; // prints "a\b\tc\$d". Only \\ is converted.
?>


<!-- 4. printf() -->
<?php
$title = "X-Men";
$amount = 54.235;
printf("The movie <b>%s</b> made %.2f million.", $title, $amount);
// output: "The movie <b>X-Men</b> made 54.23 million."
?>


<!-- 
5. PHP typically does not run from the command-line, but input from the keyboard can be accessed using the fopen function with “php://stdin”. 
-->