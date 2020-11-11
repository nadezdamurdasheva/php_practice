<?php
use Animal as A;
use WildAnimal as W;
include "namespaces.php";
$cat = new A\Cat();
$dog = new A\Dog();
$cat2 = new W\Cat();
$dog2 = new W\Dog();

echo $cat->sound;
echo "<br>";
echo $dog->sound;
echo "<br>";
echo $cat2->sound;
echo "<br>";
echo $dog2->sound;
?>