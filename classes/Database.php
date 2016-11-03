<?php 
// класс для работы с БД
class Database {
	// свойство
	public $db;

	// метод который будет передовать парамметры подключения к БД
	public function __construct($host, $user, $pass, $db){
		// подключаемся созраняем в свойство $db
		$this->db = mysqli_connect($host, $user, $pass);
		if($this->db){
			exit('Нет соединение с mysql');
		}
		// выбираем базу данных с которой будет работать
		if(!mysqli_select_db($db, $this->db)){
			exit('Такой таблицы нет!');
		}

		mysqli_query("SET NAMES UTF8");

	}
}

// класс вывод сообщений на экран




 ?>