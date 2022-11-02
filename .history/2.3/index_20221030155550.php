<?php 

//$result = 1 == 3; // less than <; greater than >; equal ==; not equal !=; less than or equal <= 

$first_namel = 'G';
$last_namel = 'R';
// And '&&' Mindkettő muszáj hogy igaz legyen hogy true maradjon
//if ($first_namel == 'G' && $last_namel == 'R'){
//   echo ' The condition is true ';
//} else {
//    echo 'The condition is false';
//}

// Or || (altgr + W) Ha az egyik igaz már true
//if ($first_namel == 'G' || $last_namel == 'R'){
//    echo ' The condition is true ';
//} else {
//    echo 'The condition is false';
//}


//example(fontos a kis és nagy betű)
if ($first_namel == 'g' || $last_namel == 'r'){
    echo ' The first condition is true ';
} else if ($first_namel == 'g' && $last_namel == 'R'){
    echo 'The second condition is true';
} else {
    echo 'The condition is false';
}

?>
