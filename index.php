<?php 
class User {
/*	public $name;
	public $password;
	public $email;
	public $city;*/
	private static $name;

	public static function setName($name1){
		self::$name = $name1;
	}

	public static function getName(){
		return self::$name;
	}

}

User::setName('Анатолий');
echo User::getName();



/*
	function __construct($name,$password,$email,$city){
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
		$this->city = $city;
	}

	function getInfo(){
		return "{$this->name} "."{$this->password} "."{$this->email} "."{$this->city} ";
	}
}

$user1 = new User("Анатолий","123","tola_k@mail.ru","Пинск");
echo $user1->getInfo();*/


// https://www.youtube.com/watch?v=xc6hy-utZcQ&list=PLVfMKQXDAhGV1kj1gEGTgdzXt2jHwg-if&index=6

 ?>

