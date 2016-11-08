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
	// выводим массив в html код, вызывая нашу функцию get_body(), укажем массив и второй параметр шаблон для вывода
	$page->get_body($text, 'main');
}

 ?>