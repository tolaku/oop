<html>
    <head>
        <title>ООП</title>
    </head>
    <body>
<?php 
/**
 * класс содержит свойства, и методы.
 */
class shopingCard {
    
}

/**
 * объявляем класс (создаем объект), $product1 - экземпляр нашего класса
 * при создание объекта класса мы применяем ключевое слова - new
 */

$product1 = new shopingCard();
$product2 = new shopingCard();
$product3 = new shopingCard();


var_dump($product1 instanceof shopingCard);
var_dump($product2);
var_dump($product3);
?>
    </body>
</html>
