<?php 
// класс для работы с БД (КОНТЕЙНЕР НАШ)
class Database {
	// свойство
	public $db;

	// метод который будет передовать парамметры подключения к БД
	public function __construct($host, $user, $pass, $db){
		// подключаемся созраняем в свойство $db
		$this->db = mysql_connect($host, $user, $pass);
		if(!$this->db){
			exit('Нет соединение с mysql');
		}
		// выбираем базу данных с которой будет работать
		if(!mysql_select_db($db, $this->db)){
			exit('Такой таблицы нет!');
		}

		mysql_query("SET NAMES UTF8");

		return $this->db;
	}

	// вытаскиваем из таблицы все данные
	public function get_all_db(){
		$sql = "SELECT a.id, a.name, b.text_min, b.section_id FROM section a 
					INNER JOIN section_text b ON  a.id = b.section_id";
		$res = mysql_query($sql);
		// делаем проверку
		if(!isset($res)){
			return FALSE;
		}
			// если получили выборку из БД
		for ($i = 0; $i < mysql_num_rows($res); $i++){
			// сохраняем в массив все данные из таблицы
			$row[] = mysql_fetch_array($res, MYSQL_ASSOC);
		}

		return $row;
	}

	// вытаскиваем из таблицы базы данное одну строчку
	public function get_one_db(){

	}

}

// класс вывод сообщений на экран




 ?>