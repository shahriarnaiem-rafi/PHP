<?php
class Sub
{
    private $id;
    private $name;

    public static $file_path = "data.text";

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    function csv()
    {
        return $this->id.",".$this->name . PHP_EOL;
    }

    function save()
    {
        $subClass = file("data.text");
        file_put_contents(self::$file_path, $this->csv(),FILE_APPEND);
    }
    public static  function displayData()
    {
        $students = file(self::$file_path);
        echo "<b>Id<b> | <b>Name<b><br>";
        foreach ($students as $student) {
            list($id, $name) = explode(",", trim($student));
            echo "$id | $name <br/> ";
        }
    }
}
