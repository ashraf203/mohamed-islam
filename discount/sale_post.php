<?php
if (!$_POST) die("Error 405");

$p = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=>250];
$c = ['cairo'=>0,'alex'=>50,'others'=>200];
$d = ['laptop'=>0.2,'mobile'=>0.1,'tv'=>0.05,'tshirt'=>0];
$pn = ['laptop'=>'Laptop','mobile'=>'Mobile','tv'=>'TV','tshirt'=>'T-shirt'];
$cn = ['cairo'=>'Cairo','alex'=>'Alexandria','others'=>'Others'];

define('VAT', 0.14);

$name = trim($_POST['name']??'');
$phone = trim($_POST['phone']??'');
$product = $_POST['product']??'';
$city = $_POST['city']??'';

if (!$name || !$phone || !isset($p[$product]) || !isset($c[$city])) die("Error 400");

$price = $p[$product];
$tax = $c[$city];
$afterVat = $price * 1.14;
$discount = $afterVat * $d[$product];
$afterDisc = $afterVat - $discount;
$total = $afterDisc + $tax;

?><!DOCTYPE html>
<html><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sale</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head><body>
<div class="container mt-5"><div class="card"><div class="card-header bg-primary text-white">
<h3 class="mb-0">Invoice</h3></div><div class="card-body">
<p><b>Name:</b> <?=htmlspecialchars($name)?></p>
<p><b>Phone:</b> <?=htmlspecialchars($phone)?></p>
<p><b>City:</b> <?=$cn[$city]?></p>
<p><b>Delivery:</b> <?=number_format($tax,2)?> EGP</p>
<p><b>Product:</b> <?=$pn[$product]?></p>
<p><b>Price:</b> <?=number_format($price,2)?> EGP</p>
<p><b>After VAT:</b> <?=number_format($afterVat,2)?> EGP</p>
<p><b>Discount:</b> <?=$d[$product]*100?>% (<?=number_format($discount,2)?> EGP)</p>
<p><b>After Discount:</b> <?=number_format($afterDisc,2)?> EGP</p>
<hr><h4 class="text-success"><b>Total:</b> <?=number_format($total,2)?> EGP</h4></div>
<div class="card-footer"><a href="sale.php" class="btn btn-secondary">Back</a></div></div></div>
</body></html>