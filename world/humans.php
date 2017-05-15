<?php

function direct($obj, $class) {
	if (get_class($obj) === $class) {
		return "Yes";
	} else {
		return "No";
	}
}

function ancestor($obj, $class) {
	if (is_a($obj, $class)) {
		return "Yes";
	} else {
		return "No";
	}
}

class Human {
	public $legcount = 2;
	public $eyecount = 2;
	public $name;
}

class Male extends Human {
	public $brains = 2;
}

class Female extends Human {
	public $givesBirth = true;
}

$pelle = new Male();
$pelle->name = "Pelle";
echo "Is Pelle a direct Male? " . direct($pelle, Male::class);
echo "\n";
echo "Is Pelle a direct Female? " . direct($pelle, Female::class);
echo "\n";
echo "Is Pelle a direct Human? " . direct($pelle, Human::class);
echo "\n";
echo "\n";

echo "Is Pelle a Male or descendant of Male? " . ancestor($pelle, Male::class);
echo "\n";
echo "Is Pelle a Female or descendant of Female? " . ancestor($pelle, Female::class);
echo "\n";
echo "Is Pelle a Human or descendant of Human? " . ancestor($pelle, Human::class);
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

echo "Is Eva a Male or descendant of Male? " . ancestor($eva, Male::class);
echo "\n";
echo "Is Eva a Female or descendant of Female? " . ancestor($eva, Female::class);
echo "\n";
echo "Is Eva a Human or descendant of Human? " . ancestor($eva, Human::class);
echo "\n";
echo "\n";

