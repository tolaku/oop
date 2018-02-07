<?php 
function __autoload($var){
	include 'classes/'.$var.'.php';
}

$user = new Customer('Viktor');  // объект

if($user instanceof Customer){
	echo 'klass user is Customer';
}

echo $user->name;
$user2 = clone $user;

echo $user->name;
echo $user2->name;

//53:00

 ?>