<?php
    trait Main{
        function shoow(){
            echo "hi i am rafi ";
        }
    }
    trait Main2{
        function shoow2(){
            echo "hi i am rafi2 ";
        }
    }
    class Child{
        use Main,Main2;
    }
    class Child2 extends Child{
        function shoow3(){
            echo "<br> hi i am rafi34  ";
        }
    }
    $obi=new Child2();
    echo $obi->shoow();
    echo $obi->shoow2();
    echo $obi->shoow3();

?>