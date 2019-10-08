<?php
include('circle.php');
include('cylinder.php');
$circle = new Circle(5, 'red');
echo 'CIRCLE' . '<br>';
echo $circle->toString() . '<br>';
echo 'Perimeter: ' . $circle->getPerimeter() . '<br>';
echo 'Area: ' . $circle->getArea() . '<br>';
$cylinder = new Cylinder(10, 'red', 20);
echo 'CYLINDER' . '<br>';
echo $cylinder->toString() . '<br>';
echo 'V: ' . $cylinder->getInt();
