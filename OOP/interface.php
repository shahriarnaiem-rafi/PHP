<?php
//interface
interface  AA
{//nothing else can initialize
    public function show();
    public function show2();
}
class B implements AA
{
    function show2() {
        echo "1";
    }
    
    function show() {
        echo "1";
    }
}
class D implements AA
{
    function show() {
        echo "2 ";
    }
    
    function show2() {
        echo "1";
    }
}
$a=new D();
$a->show();
