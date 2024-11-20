<?php
    
class Car{
    public $sm;
    public $model;

    function __destruct()
    {
        #destruct
        echo "<br>";
        echo "End";
        
    }
   
 function __construct(){
         #Construct
        
        echo "This is constructor function";
        echo "<br>";
    }       
    function info(){
        echo "This is function";
    }
}
// $obj=new Car();
// echo "<br>";
// $obj->info();

class Bike extends Car{
    public $color="red";
    function __construct($name){
        #Construct
      
       echo "This is child construct function";
       echo "<br>";
       echo $this->sm=$name;
   }

    function details(){
        echo "This is  details";
    }
    
}
$bikeObj=new Bike("rafi<br>");

echo $bikeObj->details();
echo "<br>";
echo $bikeObj->color;



?>