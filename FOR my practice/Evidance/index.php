<?php
require_once ("sub.php");
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $subClass=new Sub($id,$name);
    $subClass->save();
    echo "success";
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
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        Sub::displayData();

    ?>

</body>

</html>