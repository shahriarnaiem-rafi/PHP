<?php 
session_start();
if(!isset($_SESSION['fname'])){
    header("location:Authentication.php");
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
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        Id <input type="text" name="id"><br>
        Name <input type="text" name="name">
        <br>
        <input type="submit" value="Submit" name="submit">
        <a href="logout.php">Logout</a>
    </form>

</body>

</html>