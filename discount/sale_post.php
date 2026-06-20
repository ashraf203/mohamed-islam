<?php
if(!$_POST){
    // get ruqest
    echo "Error 405 Method Not Allowed";die;
    // header('location:sale.php');die;
}
// usere -> enter his name
// usere -> enter his phone
// usere -> select $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 250]
// usere -> select $cities = ['cairo'=>0,'alex'=>50,'others'=>200]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=>0.05 , 'tshirt'=>0]
// vat : 14%
// superglobals => $_post , $_ REQUEST => associative array


// solution
// Name : Galal
// phon : 0100498488
// City : Alex
// Delivery tax : 50 EGP
// Product : Laptop
// price : 15000 EGP
// price After Vat : 17100 EGP
// Disount Percentage : 20 %
// Disount Value : 3420
// Price After Disount : 13680 EGP
// Total Price : 13730 EGP
// define('vat',0.14);
switch ($_POST['city']) {
    case 'cairo';sssssssssssssss