<?php

// no input , no output
function addv4()
{
    $number1 = 5;
    $number2 = 7;
    echo "addv4: " . ($number2 + $number1) . "\n";
}

// input , output (return)
function add($number1, $number2)
{
    return $number1 + $number2;
}

// input , output (echo)
function addv2($number1, $number2)
{
    echo "addv2: " . ($number2 + $number1) . "\n";
}

// no input , output (return)
function addv3()
{
    $number1 = 5;
    $number2 = 7;
    return $number2 + $number1;
}

$result = add(5, 7);
echo "add: " . $result . "\n";
addv2(7, 8);
$result3 = addv3();
echo "addv3: " . $result3 . "\n";
