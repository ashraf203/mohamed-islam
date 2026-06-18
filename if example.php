<?php

# app
// temp <= 0 => snow weather
// temp <= 30 => hit weather
// temp <= 1 => cold weather
// temp <= 15 => warm weather

$temp = 30;

if ($temp <= 0) {
    $message = "snow weather";
} elseif ($temp >= 1 && $temp < 15) {
    $message = "cold weather";
} elseif ($temp >= 15 && $temp < 15) {
    $message = "warm weather";
} else {
    $message = "hot weather";
}

echo $message;



// if($temp <= 0){
//    $message = "snow weather";
// }
// if($temp >= 1 && $temp < 15){
//     $message = "cold weather";
// }
// if($temp >= 15 && $temp < 30){
//     $message = "warm weather";
// }
// if($temp >= 30){
//     $message = "hot weather";
// sss}