<?php
require __DIR__.'/Car.php';
require __DIR__.'/Bicycle.php';
$bicycle = new bicycle('red');
$car=new car('red',1,'abc');
echo $bicycle->forward();
echo $bicycle->brake();
