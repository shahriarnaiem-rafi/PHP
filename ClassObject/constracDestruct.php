<?php
   
    

class Car{
    public $name;
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
    }
    function info(){
        echo "This is function";
    }


}
$obj=new Car();
echo "<br>";
$obj->info();

?>