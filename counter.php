<?php
$count = 0;
function counter()
{
    global $count;
    $count++;
    echo $count;
}

// counter();
// counter();
// counter();
// counter();
function counter2($number)
{
    $number++;
    echo $number   . '<br>';
    return $number;
}

// counter2(counter2(counter2(counter2(0))));

function counter3()
{
    static $count = 0;
    $count++;
    echo $count . "<br>";
}
counter3();
counter3();
counter3();
counter3();
