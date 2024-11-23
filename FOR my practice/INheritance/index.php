<?php 
require_once("working.php");

if(isset($_POST['btnSubmit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];

   
    $process = new Collected($id,$name);
    $process->saveinfo();
    echo "success!";
    
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#" method="post">
        Id <br><input type="number" placeholder="Enter your number" name="id"><br>
        Name <br><input type="text" placeholder="Enter your number" name="name"><br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
    <?php
    Collected::showData();

    ?>
    
</body>
</html>