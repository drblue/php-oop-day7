<?php

function direct($obj, $class) {
	if (get_class($obj) === $class) {
		return "Yes";
	} else {
		return "No";
	}
}

function ancestor_or_direct($obj, $class) {
	if (is_a($obj, $class)) {
		return "Yes";
	} else {
		return "No";
	}
}

function ancestor($obj, $class) {
	if (is_subclass_of($obj, $class)) {
		return "Yes";
	} else {
		return "No";
	}
}

class Human {
	protected $legcount = 2;
	// protected $eyecount = 2;
	// protected $name;
}

class Male extends Human {
	protected $legcount = 3;
}

class Female extends Human {
	protected $givesBirth = true;
}

class Pelle extends Male {
}

$pelle = new Pelle();

var_dump($pelle);
die();


echo "Is Pelle a direct Male? " . direct($pelle, Male::class);
echo "\n";
echo "Is Pelle a direct Female? " . direct($pelle, Female::class);
echo "\n";
echo "Is Pelle a direct Human? " . direct($pelle, Human::class);
echo "\n";
echo "\n";

echo "Is Pelle a Male or descendant of Male? " . ancestor_or_direct($pelle, Male::class);
echo "\n";
echo "Is Pelle a Female or descendant of Female? " . ancestor_or_direct($pelle, Female::class);
echo "\n";
echo "Is Pelle a Human or descendant of Human? " . ancestor_or_direct($pelle, Human::class);
echo "\n";
echo "\n";

echo "Is Pelle a descendant of Male? " . ancestor($pelle, Male::class);
echo "\n";
echo "Is Pelle a descendant of Female? " . ancestor($pelle, Female::class);
echo "\n";
echo "Is Pelle a descendant of Human? " . ancestor($pelle, Human::class);
echo "\n";
echo "\n";
echo "\n";


$eva = new Female();
$eva->name = "Eva";
echo "Is Eva a direct Male? " . direct($eva, Male::class);
echo "\n";
echo "Is Eva a direct Female? " . direct($eva, Female::class);
echo "\n";
echo "Is Eva a direct Human? " . direct($eva, Human::class);
echo "\n";
echo "\n";

echo "Is Eva a Male or descendant of Male? " . ancestor_or_direct($eva, Male::class);
echo "\n";
echo "Is Eva a Female or descendant of Female? " . ancestor_or_direct($eva, Female::class);
echo "\n";
echo "Is Eva a Human or descendant of Human? " . ancestor_or_direct($eva, Human::class);
echo "\n";
echo "\n";

