<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
$buah = new Fruit("Banana","Yellow");
$buah->intro();
echo "<hr>";

class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit or berry? ";
    }
}
$strawberry = new Strawberry("Strawberry","Red");
$strawberry->message();
echo "<br>";
$strawberry->intro();
?>