<?php
class Teacher
{
    private $id;
    private $name;

    public static $file_path = "data.text";

    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }
    function csv()
    {
        return $this->id . "." . $this->id . PHP_EOL; //PHP_EOL is use for line break

    }
    function save()
    {
        $teachers = file(self::$file_path); //from line 6
        file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
        //The file_put_contents() writes data to a file.
        // Use FILE_APPEND to avoid deleting the existing content of the file.
    }

    public static function display_students(){
	   
	    $teacher=file(self::$file_path);
		
		echo "<b>ID | Name</b><br/>";
		foreach($teacher as $teachers){
				   list($_id,$_name)=explode(",",trim($teacher));
				   echo "$_id | $_name<br/>";   
	    }
				
   }   

}
