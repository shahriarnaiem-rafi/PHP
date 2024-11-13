<?php
    function add(){
        return strlen("bangladesh");
    }
    echo add();
    echo "<br>";
    function add1(){
        return substr("bangladesh",3);
    }
    echo add1();
    echo "<br>";
    function add2(){
        return strtoupper("Bangladesh");
    }
    echo add2();
    echo "<br>";
    function add3(){
        return strtolower("bangladesh");
    }
    echo add3();
    
?>