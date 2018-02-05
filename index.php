<?php 
	// все страницы сайта
	class Page {
		public $title;
		public $content;
		public $footer;

		public function __construct($t, $c, $f){
			$this->title = $t;
			$this->content = $c;
			$this->footer = $f;
		}

		// выводит на экран строку
		public function render_body(){
			$str = '<h1>'.$this->title.'</h1>';
			$str .= '<p>'.$this->content.'</p>';
			$str .= '<p style="font-size:8px;">'.$this->footer.'</p>';

			return $str;
		}

	}

	class Index extends Page {
		public $slide;
		public $news;

		public function __construct($t, $c, $f, $s, $n){
			parent::__construct($t, $c, $f);
			$this->slide = $s;
			$this->news = $n;
		}

		public function render_body(){
			$str = parent::render_body();
			$str.= "<p>".$this->slide."</p>";
			$str.= "<p>".$this->slide."</p>";

			return $str;
		}
	}

	// объект класса Page
	$page = new Page('Page', 'hello i am page', 'footer');
	echo $page->render_body();

	//  объект нашего класса Index
	$index = new Index('INDEX', 'HELLO i am index', 'footer', 'slide_show', 'news');

	echo $index->render_body();

	//echo $index->render_body();
?>

