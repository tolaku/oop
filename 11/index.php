<?php

interface FirstInterface {
    public function getName();
}

interface SecondInterface {
    public function getStatus();
}

class Test implements FirstInterface, SecondInterface {
    public $name = "Анатолий";
    public $status = "Админ";
    
    public function getName() {
        echo $this->name;
    }
    
    public function getStatus() {
        echo $this->status;
    }
}

$user = new Test;
$user->getName();
$user->getStatus();
