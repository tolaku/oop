<?php 
// Класс для выгрузки из БД данный для размещения на странице

class Page {
	// свойство вывода текста
	public $text;

	// метод вывода всех статей
	public function get_all(){
		// создаем объект нашего класса Database
		$db = new Database(HOST, USER, PASS, DB);
		// получаем массив со всеми статьями
		$result = $db->get_all_db(); 

		return $result;
	}

	// метод вывода одной статьи
	public  function get_one($id){

	}

	// возращает готовый вид
	public function get_body(){

	}
}

 ?>