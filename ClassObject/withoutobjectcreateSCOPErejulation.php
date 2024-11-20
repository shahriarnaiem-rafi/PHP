<html><h2>Static Method property</h2>
<?php

    class User{
        
        public static $name="Hello ";
         const age="hiiiiiiiiiii";
        static function showName(){
            echo "hi i am rafi";
        }
        // static function __destruct()
        // {
        //     echo "Hi i am destruct ";
        // }
         function __construct($age)
        {
            echo self::age;
        }
          
    }
    //$person = new User(); with out using it
    echo User::$name."<br>";
    
    echo User::$name="My world";
    echo User::age;
    echo User::showName();
    echo User::showName();

?>
</html>