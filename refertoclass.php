<?php


class user
{
    public $name;
    public static $status = "active";
    public const bonus = 50;
    public function login()
    {
        // return 'login';
        $this->name;
        $this->register();

        user::$status;
        user::bonus;
        user::logout();
        // 
        // self => refer to current class
        self::$status;
        self::bonus;
        self::logout();
    }

    public function register() {}
    public static function logout() {}
}

$user = new user;
// $user->name = "seif";
// $user->login();
print_r($user);
echo user::$status;  // :: => double colon , sscope resolution operator
echo user::bonus;
user::logout();
