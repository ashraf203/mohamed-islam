<?php
// procedural programming
// code => line by line , block by block
$x = 5;

echo $x;

function x () {
    echo 'x';
}

X();
// oop => object orienter programming 
// class , object 

// class => local scope => griup similar tasks

#user class =>
// function login

// function logout

// function register 


#order class =>
// function makeorder

// function cancelorder


# product class =>
// funcion  getmostrecentproducts

// funcion  getmostrecentproducts

// variable => properties , function => methods

// access modifier => (public , private , protected)
$gener = 'm';
class User {
    public $name;
    public $email;
    public $password;
    public $status;
    public $phone;

    public function __construct($name = '', $email = '', $password = '', $gender = '') {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->status = 'not active';
    }

    public function login() {
        $this->status = 'active';
        echo "login";
    }

    public function logout() {
        $this->status = 'not active';
        echo "logout";
    }

    public function register() {
        for ($i = 0; $i < 5; $i++) {
            // registration steps (placeholder)
        }
        return true;
    }
}

// object usage (global scope)
$firstuser = new User();
$firstuser->name = "asmaa";
$firstuser->email = "asmaa@example.com";
$firstuser->password = "asmaa123456";
$firstuser->status = "not active";
$firstuser->phone = "01111111111";

$seconduser = new User();
// print_r($firstuser);
// print_r($seconduser);
$seconduser->logout();
// echo $seconduser->status;