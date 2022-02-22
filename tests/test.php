<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Test;

$test = new Test();
echo($test->sayHelloWorld());
// echo Test::sayHelloWorld();