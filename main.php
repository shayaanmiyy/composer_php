<?php

require "src/Class1.php";
require "src/Class2.php";

use Class1\MyClass as MyClass1;
use Class2\MyClass as MyClass2;

$class1 = new MyClass1();
$class1->hello();
// $class1->abcd();

$class2 = new MyClass2();
$class2->hello();
// $class2->pqrs();
