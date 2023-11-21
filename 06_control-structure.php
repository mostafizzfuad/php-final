<?php
// {} not required for only one statement
if ($x > 0) $y = 5; 

// tests if $a is true or non-zero or a non-empty string
if ($a) { 
    print($b);
    $b++;
} else
    print($c);

// check large between two numbers
if ($a > $b)
    print "a is bigger than b";
elseif ($a == $b) // use "elseif" or "else if"
    print "a is equal to b";
else
    print "a is smaller than b";

// switch
$day = "sunday";

switch($day) {
    case "saturday":
        echo "today is ".$day;
        break;
    case "sunday":
        echo "today is ".$day;
        break;
    case "monday":
        echo "today is ".$day;
        break;
    default:
        echo "good day";
        break;
}


// for loop : print 1 to 10
for ($n = 1; $n <= 10; $n++) {
    print("$n ");
}

// while loop : print 1 to 10
$n = 1;
while ($n <= 10) {
    print("$n ");
    $n++;
}

// do while loop : print 1 to 10
$n = 1;
do {
    print("$n ");
    $n++;
} while ($n <= 10);


// foreach loop : 
$colors_arr = array("red", "green", "blue");

foreach ($colors_arr as $color) {
    print("$color ");
}

?>