<?php

class User {
    public $name;
    public $password;
    public $email;
    public $city;
    
    function __construct($name, $password, $email, $city) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }
    
    function getInfo(){
        $information = "{$this->name}"
        . "{$this->password}"
        . "{$this->email}"
        . "{$this->city}";
        return $information;
    }
}

$user1 = new User("Анатолий ", "654654 ", "@mail.ru ", "Пинск");
//echo $user1->getInfo();

//Class Moderator extends User{
//    protected $info;
//    public $right;
//    
//    function __construct($name, $password, $email, $city, $info, $right) {
//        parent::__construct($name, $password, $email, $city);
//        $this->info = $info;
//        $this->right = $right;
//    }
//    
//    function getInfo() {
//        $information = parent::getInfo();
//        $information .= "{$this->info}" . "{$this->right}";
//        
//        return $information;
//    }
//}
//
//$moderator = new Moderator(" Андрей ", "111111 ", "tut@mail.ru ", "Стытычево ", "Модератор ", "Тру");
//echo $moderator->getInfo();

class Moderator extends User{
    protected $info;
    public $rights;
    
    function __construct($name, $password, $email, $city, $info, $rights) {
        parent::__construct($name, $password, $email, $city);
        $this->info = $name;
        $this->rights = $rights;
    }
    
    function getInfo() {
        $information = parent::getInfo();
        $information .= "{$this->info}" . "{$this->rights}";
        return $information;
    }
}

$moderator = new Moderator('Евдокия', '55555', 'evdokia@mail.ru', 'Минск', 'Модератор', 'Доступно');
echo $moderator->getInfo();



//class Test {
//    protected $info;
//}
//
//class Test2 extends Test{
//    public function test(){
//        $this->info = "info";
//        echo $this->info;
//    }
//}
//
//$test2 = new Test2();
//$test2->info = "test2";
//$test2->test();
