<!-- =========  chapter 3 : Variables and Data Types  ========= -->

<!-- 
1. Always starts with $ and letter or underscore. Can be composed of numbers, underscores, and letters. 
-->
<?php
$name = "mostafizur";
$_age = 25;
$first_number = 50;
$number2 = 30;
// $3number = 40;  // can't start with number
?>


<!-- 
2. data types : 
        - number : int, double
        - boolean : true, false
        - NULL
        - string
        - array
        - object
-->


<!-- 
3. Variables have a default value : 
        - booleans : false 
        - integers and floats : 0
        - string : "" (empty string)
        - array : [] (empty array)
-->



<!-- 
4. All variables have local scope. Global variables may only be accessed within a function by using the global keyword.
-->
<?php
$x = "test"; // local variable
function display() {
    global $x; // global variable
    echo $x;
}
?>


<!--  
5. Constants are defined using define and by convention are usually named in ALL CAPITALS.
-->
<?php
define("PI", 3.14);
define("AGE", 25);
define("HEADING", "<h1>My Web Site</h1>");

$area = PI * $radius * $radius;
print(HEADING);
?>