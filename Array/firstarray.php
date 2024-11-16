<?php
// $car = array("Brand" => "BMW", "Model" => "3434", "Licence" => "324223423");
// //var_dump ($car);
// echo $car['Brand'];
// echo "<br>";
// echo $car['Model'];
// echo "<br>";
// echo $car['Licence'];
// echo "<br>";
// echo "<br>";
// foreach ($car as $x => $y) {
//     echo "$x:  $y <br>";
// }


// 


//Multidymentional array
//array print_r diye thik koere
$arraymain=
array(
    array(
        $food=array(
            array(01,"Drinks"),"<br>",
            array(02,"pizza"),"<br>",
            array(03,"water"),"<br>",
        ),
        $delicious=array(
            array(01,"adf"),"<br>",
            array(02,"piasdfzza"),"<br>",
            array(03,"waasdfater"),"<br>",
        ),
       
    ),
    array(
        $dress=array(
            array(01,"a"),"<br>",
            array(02,"s"),"<br>",
            array(03,"d"),"<br>",
        ),
    ),
);
print_r($arraymain[0][1][0]);




?>