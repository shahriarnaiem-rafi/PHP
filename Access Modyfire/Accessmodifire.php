<?php
    class  A{
        public $var1;
        protected $var2;
        private $var3;
        function my($ar,$arr){
            echo $this->var2=$ar+2,"<br>";
            echo $this->var3=$arr+2;
        }
    }
//     $var=new A();
   // echo $var->var1=56;
    echo $var->my(5,67);
    // echo $var->var2=56;
    // echo $var->var3=5;

    class B extends A{
        protected $var2=6;
        function my1($arrr){
            echo $this->var2=$arrr+2,"<br>";
            
        }
    }
    $varr=new B();
    echo $varr->my1(6);


?>