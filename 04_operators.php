<!-- 

1.  arithmetic : + - * / %

2.  assignment : = += -= /= *= %= ++ --
    string concatenation operator : .=

3.  comparison : == , != , < , > , <= , >= , not equal : <> or !=
    === - true if arguments are equal and the same data type.
    !== - true if arguments are not equal or they are not of the same data type.

4.  logical : && || !
    and or - like && and ||
    xor - true if either (but not both) of its arguments are true.
-->

<!-- xor operation -->
<?php
if (5 < 3 xor 5 < 10) {
    echo "Only one of the expressions was true";
}
?>