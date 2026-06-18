<?php

$person = 100;
'female'; //female
$salary = 100; // salary < 1000 => poor , salary >= 1000 => rich
#app => male , poor 

if ($person == 'male') {
    // male
    $message = "male";
    if ($salary < 1000) {
        $message .= ", poor";
    } else {
        $message .= ", Rich";
    }
} else {
    // female
    $message = "famale";
    if ($salary < 1000) {
        $message .= ", poor";
    } else {
        $message .= ",Rich";
    }
}

// echo $message;

$message = ($person == 'male' ?
    ($salary > 1000 ? 'male , rich' : 'male , poor')
    : ($salary > 1000 ? 'female ,rich' : 'female , poor'));
echo $message;
