<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    private function intro() {
        echo "This fruit is $name and its color is $color";
    }
}

class Strawberry extends Fruit {
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
      }
      public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
      }
}
$strawberry = new Strawberry("Stwawberry","red","50");
$strawberry->intro();
?>