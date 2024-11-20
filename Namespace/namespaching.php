<?php


require "namespacingchild1.php";
require "namespacingchild2.php";


use USER\Apple;
use USER2\Banana;
$obj = new Apple();
$obj1 = new Banana();

echo $obj->rafi;
echo $obj->show();
echo $obj1->name;
