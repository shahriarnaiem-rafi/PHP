<?php
    require "student_class.php";
    if(isset($_POST['$btnsubmit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];

        $teachers=new Teacher($id,$name);
        $teachers->save();
        echo "Succes";

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        ID <input type="text" name="id"><br>
        Name <input type="text" name="name"><br>
        <input type="submit" name="btnsubmit" value="Submit">

    </form>
    <?php 
        // Student::display_Student();
    ?>

</body>

</html>