<?php

// pass by value
$x = 10;
function printvalue($x)
{
    $x++;
    echo $x;
}

printvalue($x);
echo $x;


// pass by reference
$x = 10;
function printValueByReference(&$x)
{
    $x++;
    echo $x;
}

printValueByReference($x); // 11
echo $x;                    // 11

echo "\n";






$test = 0;
function test()
{
    global $test;
    $test = 10;
}

test();
echo $test; // 10

echo "\n";

function test2()
{
    $y = 5;
    return $y;
}
echo test2(); // 5