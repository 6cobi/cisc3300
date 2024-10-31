<?php
require_once 'class.php';

$cat = new Cat("Pipi", "Grey");
echo "Name: " . $cat->getName() . "<br>\n";
echo "Color: " . $cat->getColor() . "<br>\n";
echo "Breed: " . Cat::getBreed();
