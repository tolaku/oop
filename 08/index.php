<?php

class user {
    public static $name;
    
    public static function hello(){
        echo "Hello ";
        return self::$name;
    }
}

user::$name = "Анатолий";

echo user::$name;

echo user::hello();
