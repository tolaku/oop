<?php

abstract class User{
    public $name;
    public $status;
    
    abstract public function getStatus();
}

class Admin extends User{
    public function getStatus() {
        echo "ADMIN";
    }
}

$user1 = new Admin();
$user1->getStatus();
