<?php
    //date function
    // a.date_diff(_difference between two date);

    echo date('l');#l which day week day
    //current date
    echo "<br>";
    echo "Today is ".date("d/m/Y") ;




    echo "<br>";

    $d1=date_create("28-03-2024");
    $d2=date_create("30-03-2024");
    $diff=date_diff($d1,$d2);

    echo $diff->format("%R%a days");
    echo "<br>";
    date("d-m-y");


   



    echo "<br>";
    date_default_timezone_set("Asia/Dhaka");#time zone wich country
    echo date('h i sa');
    echo "<br>";

   // current time show

    $t=time();
    echo date('h i sa',$t+3600);# time houre + 1 hour
    echo "<br>";
    
    $g=time();
    echo date('h i sa',$g);


?>