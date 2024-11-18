<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Max Number</title>
</head>
<body>
<form action="" method="post">
    Enter the Number:<br>
    <input type="number" name="number"><br><br>
    <input type="number" name="number1"><br><br>
    <input type="number" name="number2"><br><br>
    
    <input type="submit" value="Submit">

</form>
    <?php
        if($_POST){
           

            $a=$_POST['number'];
            $b=$_POST['number1'];
            $c=$_POST['number2'];

            echo " $a <br><br>";
            echo " $b <br><br>";
            echo " $c <br><br>";

            
            if($a>$b && $a>$c){
                echo $a;
            }
            else if($a<$b && $b>$c){
                echo $b;
            }
            else{
                echo $c;
            }
            echo "<br>";

//const == define();
            define("name","welcome to SNR Company");
            echo name;

        }
    ?>
</body>
</html>