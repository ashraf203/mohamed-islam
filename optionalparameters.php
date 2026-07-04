<?php

function mulNumbers($number1, $number2 = 1, $number3 = 1)
{
    return $number1 * $number2 * $number3;
}

echo mulNumbers(5, 7, 8);


function printName($message = "")
{
    echo $message;
}

printName("hello world");
printName();

function sumNumbers($number1, $number2 = 0)
{
    return $number1 + $number2;;
}

echo sumNumbers(5);

function echofullName($first, $last, $middle = "")
{
    echo "$first $middle $last";
}

// echofullName("galal", "husseny", "abdelrahman");
// echofullName("galal", "husseny");
