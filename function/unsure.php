<?php

// function add($name,...$a){
//     echo $name;
// print_r($a);
// }
// add(1,2);
// echo "<br>";
// add(1,2,3,4);
// echo "<br>";
// add(1,0,"mack",['a','b']);
// echo "<br>";
// add("a");
// echo "<br>";

function add(...$arg)
{
    $sum = 0;
    foreach ($arg as $num) {
        if (is_numeric($num)) {
            $sum += $num;
        }
    }
    return $sum;
}

add(1, 2);
echo "<br>";
add(1, 2, 3, 4);
echo "<br>";
add(1, 0, "mack", ['a', 'b']); //考慮到例外
echo "<br>";
add("a");
echo "<br>";


?>
