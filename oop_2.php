<?php
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function sound();
}

class Dog extends Animal {
    public function sound() {
        return "Woof";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow";
    }
}

$dog = new Dog("Buddy");
echo $dog->sound(); // Output: Woof

$cat = new Cat("Whiskers");
echo $cat->sound(); // Output: Meow
?>
QUESTION 2

<?php
MyNamespace;

// Define a class within the namespace
class MyClass {
    public function __construct() {
        echo "Constructor called from MyNamespace\\MyClass.";
    }
}


$obj = new MyClass(); 

?>

QUESTION 3
<?php

// Parent class
class Animal {
    // Function with default behavior
    public function makeSound() {
        echo "Animal makes a sound\n";
    }
}
class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks\n";
    }
    public function makeSoundWith($sound) {
        echo "Dog makes a {$sound} sound\n";
    }
}

// Create objects
$animal = new Animal();
$dog = new Dog();
$animal->makeSound(); // Output: Animal makes a sound
$dog->makeSound(); //Dog barks
$dog->makeSoundWith("loud"); //Dog makes a loud sound

?>

QUESTION 4
Object-oriented programming (OOP) offers many advantages, but it also has some limitations:

1.Complexity:OOP can lead to complex class hierarchies and relationships, 
especially in large-scale applications.

2.Performance Overhead:OOP can introduce performance overhead due to features like dynamic dispatch, inheritance, and polymorphism.
 While modern programming languages and runtime environments optimize these features, they can still impact performance compared to procedural programming.

3.Difficulty in Testing:Testing object-oriented code, especially with inheritance and polymorphism,
 can be challenging. Writing comprehensive test cases to cover all possible scenarios involving subclasses 
 and overridden methods can be time-consuming and error-prone.

4.Overuse of Inheritance: Inheritance, a key feature of OOP, can lead to the overuse of subclassing,
 resulting in deep inheritance hierarchies. Deep inheritance hierarchies can make code harder to understand,
  maintain, and extend. Developers need to carefully consider when to use inheritance and when to favor composition over inheritance.

5.Not Suitable for All Situations: While OOP is well-suited for modeling real-world entities and building large-scale, 
maintainable applications, it may not be the best approach for all programming tasks. Certain problems may be more naturally 
solved using procedural or functional programming paradigms.

