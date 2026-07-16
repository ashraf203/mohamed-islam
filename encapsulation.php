<?php

class user
{
    public $name;
    public $email;
    private $password;
    private $gender;

    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($password)
    {
        if (strlen($password) >= 8) {
            $this->password = $password;
        }
    }

    public function getGender()
    {
        return ($this->gender == 'm') ? 'male' : 'female';
    }

    public function setGender($gender)
    {
        $genders = ['m', 'f'];
        if (in_array($gender, $genders)) {
            $this->gender = $gender;
        }
    }
}

$object = new user;
$object->setpassword(123456789);
echo $object->getpassword();
// $object->setgander('f);
// echo$object->gender();
// 
