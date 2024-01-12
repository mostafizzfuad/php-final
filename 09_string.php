<?php
// concatenation
$full_name = "Mostafizur";
$last_name = "Rahman";
$full_name = $first_name . " " . $last_name;
echo $full_name;




// strlen(str) : returns string length


// strcmp($str1, $str2) : compare between two strings
/*  0 : if the two strings are equal
    1 or greater than 0 : if string1 > string2 
    -1 or less than 0 : if string1 < string2 
*/
$str1 = 50;
$str2 = 60;
echo strcmp($str1, $str2);

// strstr() 
$text = "Hello world!";
$search = "world";
echo strstr($text, $search);
// Returns first occurrence of $search in $text, FALSE if not found. 
// search for the character matching the ASCII value of the number


// str_replace() : function replaces some characters with some other characters in a string.
echo str_replace("world", "Peter", "Hello world!");
// Search the string "Hello World!", find the value "world" and replace it with "Peter

// chop($str) Removes all white space at end of string.
// ltrim($str) Removes all white space at beginning of string.
// trim($str) Removes all white space at beginning and end of string.



