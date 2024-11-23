<?php
class Collect
{
    public $id;
    public $name;

    public static $file_location = "datastore.text";
}
class Collected extends Collect
{
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    function linebreak()
    {
        return $this->id . "," . $this->name . PHP_EOL;
    }
    function saveinfo()
    {
        $my = file(self::$file_location);
        file_put_contents(self::$file_location, $this->linebreak(), FILE_APPEND);
    }
    public static function showData()
    {
        $plurals = file(self::$file_location);
        echo "<b>Id</b>| <b>Name</b> <br>";

        foreach ($plurals as $singular) {
            list($id, $name) = explode(',',trim($singular));
            echo "$id | $name <br>";
        }
    }
}
