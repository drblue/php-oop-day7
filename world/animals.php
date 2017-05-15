<?php

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

class Dog extends Mammal {
	protected $traits = ["best friend"];
}

class Cat extends Mammal {
	protected $traits = ["secret murderer", "evil"];
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

function lineage($obj, $otherClass) {
	$our_class = get_class($obj);

	if (is_a($obj, $otherClass)) {
		if ($our_class === $otherClass) {
			echo "{$our_class} is a {$otherClass}.";
		} else {
			echo "{$our_class} is a decendant of {$otherClass}.";
		}
	} else {
		echo "{$our_class} is *NOT* a decendant of {$otherClass}.";
	}
	echo "\n";
}

echo "Is dog a Dog?\n";
lineage($dog, Dog::class);
echo "\n";

echo "Is dog a Cat?\n";
lineage($dog, Cat::class);
echo "\n";

echo "Is dog a Mammal?\n";
lineage($dog, Mammal::class);
echo "\n";

var_dump($dog);
var_dump($cat);
var_dump($bird);
