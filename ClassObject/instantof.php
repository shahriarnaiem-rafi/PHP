
<?php

//instanceof  object chek kore ata ki class ar ki na;


    class A{
        public $name="rafi";
    }
    class B {
        public $brand="kjhkjh";

        function my(){
            Echo "hi";
        }
        function my1(){
            Echo "hi";
        }
    }
    $a=new A();
    $b=new B();
    //check B in b   using instant of
    var_dump($b instanceof B);


    if (method_exists($b, 'my1')) {
        echo "The method exists.";
    } else {
        echo "The method does not exist.";
    }

var_dump(method_exists($b, 'my1'));
?>