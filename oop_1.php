QUESTION 1
<?php

// Functional Programming
function add($a, $b) {
    return $a + $b;
}

$result = add(3, 4);
echo "Functional Programming Result: $result\n";

// Procedural Programming
$a = 3;
$b = 4;
$result = $a + $b;
echo "Procedural Programming Result: $result\n";

// Object-Oriented Programming
class Calculator {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add() {
        return $this->a + $this->b;
    }
}

$calculator = new Calculator(3, 4);
$result = $calculator->add();
echo "Object-Oriented Programming Result: $result\n";

?>
QUESTION 2
 ___________________________
|          Class            |
|---------------------------|
|    Properties             |
|---------------------------|
|    Methods                |
|---------------------------|
|    Constructor            |
|---------------------------|
|    Destructor             |
|___________________________|

          |
          |
          v

  _____________
 |   Object    |
 |-------------|
 |   Properties|
 |-------------|
 |   Methods   |
 |-------------|
 |   (Data)    |
 |_____________|



 QUESTION 3
 <?php

class Fruit {
    private $name;
    private $color;

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

// Instantiating the Fruit class with four different fruits
$apple = new Fruit();
$apple->set_name("Apple");

$banana = new Fruit();
$banana->set_name("Banana");

$orange = new Fruit();
$orange->set_name("Orange");

$mango = new Fruit();
$mango->set_name("Mango");

// Retrieving the names of the fruits
echo "Fruit Names:\n";
echo $apple->get_name() . "\n";
echo $banana->get_name() . "\n";
echo $orange->get_name() . "\n";
echo $mango->get_name() . "\n";

?>


