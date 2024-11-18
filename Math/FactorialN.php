<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial N</title>
</head>
<body>
<form action="" method="post">
    Enter the Number:<br>
    <input type="number" name="number"><br><br>
    <input type="submit" value="Submit">

</form>
    <?php
        if($_POST){
            $fact=1;

            $number=$_POST['number'];

            echo "Factorial fo $number: <br><br>";

            for($i=1; $i<=$number; $i++){
                $fact=$fact*$i;

            }
            echo $fact."<br>";

        }
    ?>
</body>
</html>