<?php

interface WagsTail {
	public function wagTail();
}

interface ChasesBall {
	public function chaseBall();
}

class Animal {
	protected $breathes = true;
}

class Mammal extends Animal {
	protected $legs = 4;
	protected $type = "vertebrate";
}

class Reptile extends Animal {
	protected $legs = null;
	protected $type = "reptile";
}

class Dog extends Mammal implements WagsTail, ChasesBall {
	protected $traits = ["best friend"];

	public function wagTail() {
		echo "I HAPPY I WAG TAIL.\n";
	}

	public function chaseBall() {
		echo "I CHASE BALL I VERY HAPPY BEST DAY EVER.\n";
	}
}

class Cat extends Mammal implements WagsTail, ChasesBall {
	protected $traits = ["secret murderer", "evil"];

	public function wagTail() {
		echo "I VERY ANGRY, I BITE.\n";
	}

	public function chaseBall() {
		echo "No.\n";
	}
}

class Bird extends Reptile {
	protected $traits = ["lays eggs"];
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();
$mammal = new Mammal();
$reptile = new Reptile();
$animal = new Animal();

echo "Dog wag tail:";
$dog->wagTail();
echo "\n";

echo "Cat wag tail:";
$cat->wagTail();
echo "\n";

