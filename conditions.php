<?php

# comparison operators => ( > , < , >= , <= , == , != , === , !== )
$number1 = 10;
$number2 = '10';
$number3 = 5;
var_dump($number1 === $number2);
# logical operators and &&, or ||, !
#and
// x  y     z
// 1  1     1
// 0  1     0
// 1  0     0
// 0  0     0
# or 
// x  y     z
// 1  0     1
// 1  0     1
// 0  1     1
// 0  0     1
# not 
// x       y
// 1       0
// 0       1
// var_dump( !(($number2 > $number1 AND $number1 > 0) || ($number3 < $number1 OR $number1 >= $number2)) );