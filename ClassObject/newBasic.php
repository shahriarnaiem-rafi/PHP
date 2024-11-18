<?php
    #Class declar
    class Car{
        #static value
        public $name="BMW";
        public $model="B-1220";
        public $color="Red";
       

        function info(){
            return "this is nice car";
        }
    
    }
 #object declar
     $nCar=new Car();
    
     echo $nCar->info();
     echo "<br>";
     echo $nCar->name." ".$nCar->model." ".$nCar->color;

   ?>