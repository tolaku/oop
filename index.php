<?php 
include 'config.php';
include 'classes/Page.php';
include 'classes/Database.php';

$page = new Page();
if(isset($_GET['id'])){
	// выводим полностью информации о статье
}
else{
	// обращаемся к объекту Page в файле Page.php для вывода всех статей
	$text = $page->get_all();
	print_r($text);
}

 ?>