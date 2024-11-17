<?php
$str="i aM rafi";
$pattern="/am/i";
$ch=var_dump(preg_match($pattern,$str)); 

echo $ch;
?>