<?php
    class Bike{
        public $bike;
        public $age;
        public $a,$b;
    
    function Person($bname){
        return $this->bike=$bname;
    }
    function PersonAge($bAge){
        return $this->age=$bAge;
    }
    function PersonBusiness($aa,$bb){
        return $this->a=$aa." ".$this->b=$bb." ". $aa+$bb." his avarage product price";
    }

}

    $b=new Bike();
    echo $b->Person("Rafi <br>");
    echo $b->PersonAge("his age is 21<br>");
    echo $b->PersonBusiness(200,6);
?>