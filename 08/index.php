<?php

class user {
    public static $name;
    
    public static function hello(){
        echo "Hello " . self::$name ."";
    }
}

user::$name = "Анатолий";



echo user::hello();
