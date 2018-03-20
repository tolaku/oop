<html>
    <head>
        <title>ООП 2</title>
    </head>
    <body>
<?php 

class Shop {
    Private $name;
    
    public function naming(){
        $this->name = "Adidas";
        echo $this->name;
    }
}

/**
 * создаем экземпляр класса Shop
 */

$product = new Shop();
$product->naming();

?>
    </body>
</html>
