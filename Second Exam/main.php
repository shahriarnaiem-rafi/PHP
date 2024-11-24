<?php
class Main
{
    private $id;
    private $name;
    private $batch;

    public static $data_file ="data.txt";

    function __construct($id, $name, $batch)
    {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }
    function breakLine()
    {
        return $this->id . "," . $this->name . "," . $this->batch . PHP_EOL;
    }
    function save()
    {
        file_put_contents(self::$data_file ,$this->breakLine(),FILE_APPEND);
    }

    public static function operation()
    {
        $datas = file(self::$data_file);
        echo "<table style='border-collapse:collapse; background-color:lightblue; margin-left: 400px; width:550px;  text-align:center;' border='1'>";
        echo "<tr style=' background-color:black; color:white; text-shadow: 1px 1px 1px red;  '>
                <th>Id</th>
                <th>Name</th>
                <th>Batch</th>
            </tr>";
        foreach ($datas as $data) {
            list($id, $name, $batch) = explode(",", trim($data));
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$batch</td>
                </tr>";
        }
        echo "</table>";
    }
}
