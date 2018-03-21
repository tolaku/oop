<?php

//class User {
//    public $name;
//    public $password;
//    public $email;
//    public $city;
//    
//    function __construct($name, $password, $email, $city) {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//    
//    function getInfo(){
//        echo "{$this->name}"
//        . "{$this->password}"
//        . "{$this->email}"
//        . "{$this->city}";
//    }
//}
//
//$user1 = new User("Анатолий", "654654", "@mail.ru", "Пинск");
//
//$user1->getInfo();

class DestractableClass {
    function __construct() {
        print 'Конструктор ';
        $this->name = 'DestractableClass';
    }
    
    function __destruct() {
        print " Уничтожение - " . $this->name;
    }
}

$obj = new DestractableClass;
