<?php 
class User {
	// объявим свойство
	public $name;

	public function __construct($name){
		$this->name = $name;
	}
}

$user = new User('Viktor');

echo $user->name;
$user2 = $user;
$user2->name = 'New STR';
echo $user->name;

//13:00

 ?>