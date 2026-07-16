<?php
class Food{
    private $name;
    private $price;

    public function show_price() {
        echo $this->price . '<br>';
    }

    public function __construct(string $name, int $price){
    $this->name = $name;
    $this->price = $price;
    }
}

$coffee = new Food('みかん' , 30);
$coffee->show_price();
print_r($coffee);


class Animal{
    private $name;
    private $height;
    private $weight;
    
    public function show_height() {
        echo $this->height . '<br>';
    }

    public function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
    }
}

$coffee = new Animal('猫' , 50, 10);
$coffee->show_height();
print_r($coffee);

?>