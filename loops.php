<?php

$message = "hello from nti";
$users = ['sars', 'glal', 'seif', 'arwa', 'mohamed'];

#for
// for(initial counter; condition; step){
// code
// }
for ($i = 1; $i <= 5; $i++) {
    echo $message . ' ' . $i . '<br>';
}
for ($i = 5; $i >= 1; $i--) {
    echo $message . ' ' . $i . '<br>';
}
// $lastIndex = count($users) - 1;
// for ($counter = $lastIndex; $counter >= 0; $counter--) {
//     echo $users[$counter] . '<br>';
// }
// for ($i = 0; $i <= 18; $i += 2) {
//     echo $message . ' ' . $i . '<br>';
// }

// for ($counter = 0; $counter < count($users); $counter++) {
//     echo $users[$counter] . '<br>';
// }


// # while
// $counter = 1;
// while ($counter <= 5) {
//     echo $message . ' ' . $counter . '<br>';
//     $counter++;
// }
// $counter = $lastIndex;
// while ($counter >= 0) {
//     echo $users[$counter] . '<br>';
//     $counter--;
// }


// # do while
// $counter = 1;
// do {
//     echo $message . ' ' . $counter . '<br>';
//     $counter++;
// } while ($counter <= 5);

// $i = $lastIndex;
// do {
//     echo $users[$i] . '<br>';
//     $i--;
// } while ($i >= 0);
