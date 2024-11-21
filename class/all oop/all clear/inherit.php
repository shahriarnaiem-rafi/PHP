<?php
namespace all;
require "Abstract.php";
use abst\AB;
    class A extends AB{
        function show3(){
            echo "i am abstract";
        }

        function show(){
            echo "Hello i am inheritace";
        }
    }
    class B extends A{
        function show1(){
            echo "Hello i am B";
        }

    }
?>