<?php

require "core/bootstrap.php";
echo "<pre>";

// $result = fetchTable($pdo, 'tracks', 'Track');
// var_dump($result);
var_dump(fetchTable($pdo, 'artists', 'Artist'));
var_dump(fetchTable($pdo, 'albums', 'Album'));
var_dump(fetchTable($pdo, 'tracks', 'Track'));
