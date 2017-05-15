<?php

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

