<?php

class mobile
{
    public $brand;
    public $color;

    public function  on()
    {
        echo "welcom from $this->brand and my color $this->color <br>";
    }
    public function printmessage($brand)
    {
        echo $this->brand;
        // echo $brand
    }
}

$apple = new mobile;
$apple->color = 'black';
$apple->brand = 'Apple';
$apple->oN();

$samsund = new mobile;
$samsund->color = 'blue';
$samsund->brand = 'sara';
$samsund->oN();


$oppo = new mobile;
// $oppo->color = 'yellow';
// $oppo->brand = 'oppo';
// $oppo->on();
$oppo->printmessage("Addidas");
