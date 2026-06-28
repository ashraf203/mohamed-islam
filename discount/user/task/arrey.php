<?php
// $names = ['aya','abeer','sara',null,5,9.5,true,[],(abject)[]];
# indexed array element(index,value)
$users = ['rana', 'rana x', 'ahmed x', 'ahmed'];
// echo $users[1]; //get value
// echo "<br>";
$users[4] = 'ahmed'; //set value
$users[1] = "asmaa"; //edit value
// $users[6] = "galal";
// $users[-1] = "nermen";
// echo $users[5];
// print_r($users);
$lastIndex = count($users) - 1;
// echo $lastIndex;

# associative array elwmwnt(ket,value)
$product = [
    'id' => 5,
    'name' => 'laptop',
    'price' => 5000,
    'status' => true
];

echo $product['name']; // get value
$product['quantity'] = 10; // set value
$product['id'] = 1; // edit value
//  print_r($product);

#object element(property,value)
$productObject = (object)[
    'id' => 5,
    'name' => 'laptop',
    'prince' => 5000,
    'status' => true,
];

echo $productObject->name; // gat value
$productObject->details = 'details'; //set value
$productObject->price = 1000; //edit value

// $mumber = (string)5;
// var_dump($number);