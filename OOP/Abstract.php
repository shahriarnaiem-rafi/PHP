<?php
abstract class C
{
    abstract public function info();
    abstract public function show();
    public function djrahat()
    {
        echo "Hello kire";
    }
}
class B extends C
{
    function info()
    {
        echo "no more today";
    }
    function show() {
        echo "no  today";
    }
   
}
class D extends C
{
    function info()
    {
        echo "no more today";
    }
    function show() {
        echo "no  today";
    }
}
$a=new B();
$a->info();
$a->show();

?>