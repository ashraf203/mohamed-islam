<?php

$users = ['sara', 'glal', 'seif', 'arwa', 'asmaa', 'rana', 'mohamed'];



foreach ($users as $index => $value) {
    if ($value == 'glal') {
        //    continue; // skip current iteration
        // break;     // skip current loop
    }
    echo $value . '<br>';
}

foreach ($users as $index => $value) {
    // if($index >= 2){
    if ($index % 2 != 0) {
        continue;
    }
    echo $value . "<br>";
}
