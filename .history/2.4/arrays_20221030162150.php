<?php 
// traditional array
// Start counting number is 0 so Vela=0; Explorer=1; Strat=2
//$guitars1 = ['Vela', 'Explorer', 'Strat'];
 
//if (isset($guitars1[3])) {
//    echo $guitar1[3];
//} else {
//    echo 'Guitar does not exists';
//}
//associative array(u need a key to open the door)
$guitar2 = [
    //key     door//
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat'
];

echo $guitars2['prs'];



?>