<?php

// if(TURE) || FASE){
// code
// }elseif( TRUE || FALST){
// code
// }else {
// code
// }


// condtion => true || false 
$number1 = 9;
$number2 = 2;
// if($number1 > $number2){
// echo "ahmed";
// }
$data = [];
// resticted values => 0; '' , '0' , null ,false , []
// if($data){
//      echo "ok"
// }

$gender = 'm'; // 'f'
// if($gender == 'm'){
//     echo "male"
// }else{
//     echo "female";
// }

// if($gender == 'm'){
//     echo "bonus";
// }

// $order = 'p';

$order = "s";
// $order = "w";

// $order = "d";

if ($order == 'p') {
    $status = "pending";
} elseif ($order == 's') {
    $status = 'shipped';
} elseif ($order == 'w') {
    $status = "on your way";
} else {
    $status = "deliverd";
}

echo $status;
