<?php
    #Class declar
    class Car{
    
        #dynamic value 
        public $name;
        public $model;
        public $color;

        function set_name($name,$color,$model){
            $this->name=$name;
            $this->color=$color;
            $this->model=$model;
        }
        function get_name(){
            return $this->name." ".$this->color." ".$this->model;
        }

    }
     #object declar
     $nCar=new Car();
    
    
      $nCar->set_name("CMW","green","b-45");
      echo $nCar->get_name();
      echo "<br>";
      $nCar->set_name("Rolls Royece","black","Model- Gost");
      echo $nCar->get_name();
      echo "<br>";
      $nCar->set_name("Range Rover","White","Model- a34534");
      echo $nCar->get_name();
      
?>