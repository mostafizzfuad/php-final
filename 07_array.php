<!--  
    
1. What is an Array?
An array is a special variable, which can hold more than one value at a time. 

In PHP, there are three types of arrays:
    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

-->

<?php

// Indexed arrays
$friendsName = array("shuvo", "rifat", "bappy", "sabbir");

print($friendsName[2]); // bappy

// length of an array: count()
print(count($friendsName)); // 4

echo PHP_EOL;

// traverse or iterating indexed array
for ($i = 0; $i < count($friendsName); $i++) {
    print($friendsName[$i] . " ");
}


// Associative arrays
$age = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);

// $variableName['key'] = value;
// $age['Peter'] = "35";
// $age['Ben'] = "37";
// $age['Joe'] = "43";

print($age['Peter']); // 35

echo PHP_EOL;

// traverse or iterating associative array
foreach ($age as $key => $value) {
    // $variableName['key'] = value;
    echo $key . " = " . $value;
    echo "<br>";
}


// **************** Extracting array keys and values: ***************** //
$age = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);
// The array_keys() function returns an array containing the keys.
$friend_name = array_keys($age); // Array ( [0] => Peter [1] => Ben [2] => Joe )
// The array_values() function returns an array containing all the values of an array.
$friend_age = array_values($age); // Array ( [0] => 35 [1] => 37 [2] => 43 )



// Print contents of an array for debugging:
$friendsName = array("shuvo", "rifat", "bappy", "sabbir");
print_r($friendsName);
//expected output : Array ( [0] => shuvo [1] => rifat [2] => bappy [3] => sabbir )



// Pull values out of an array: 
// The list() function is used to assign values to a list of variables in one operation.
$colors = array("red", "green", "blue");
list($c1, $c2) = $colors;
print("$c1 and $c2"); // prints "red and green"



// Delete from an array: unset()
$colors = array("red", "green", "blue");
unset($colors[1]); // $colors now contains red and blue at indexes 0 and 2.


// ************** Treat an array like a stack: ***************//
// array_push() : add element to the end of the array
$a = array("red", "green");
array_push($a, "blue", "yellow");
print_r($a);

// array_pop() : remove element to the end of the array
$a = array("red", "green", "blue");
array_pop($a);
print_r($a);



// ***************** Sort an array: *************** //
// sort() : alphabetical order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // BMW Toyota Volvo

// rsort() : reverse alphabetical order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); // Volvo Toyota BMW 


?>