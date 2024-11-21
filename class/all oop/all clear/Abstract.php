<?php
namespace abst;
require "interface.php";
use inter\CD;
abstract class AB implements CD{
    abstract function show3();
    function show4(){
        echo "i am from inter face";
    }
}
// class BC extends AB{
//     function show3(){
//         echo "Hello i am BC";
//     }
// }

?>