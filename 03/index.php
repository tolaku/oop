<?php
class User {
    public $name = 'Анатолий';
    public $password = 'Пароль';
    public $email = 'Емейл';
    public $city = 'Город';
    
    function gitInfo(){
        echo "{$this->name} " . "$this->surname";
    }
}

$admin = new User;
$admin->name = 'Николай';
$admin->surname = "Басков";
echo $admin->gitInfo();