<?php
session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    if (!($password == 1234)) {
        echo "incorrect pass<br>";
    } else {
        $_SESSION["raji"] = $password;
        header("location:project.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
</head>

<body>
    <form action="" method="post">
        name
        <input type="text" name="name"><br>
        Password
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>