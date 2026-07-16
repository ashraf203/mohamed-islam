<?php


class user
{
    public $name;

    public function getuser()
    {
        return $this;
    }

    public function login()
    {
        return $this;
    }
}

$user = new user;
$user->name = 'galal';
// $user->getuser()->login(->name);
