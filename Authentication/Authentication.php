<?php session_start();
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];

    if($name=="shahriar" && $password=="1234"){
        $_SESSION['fname']=$name;
        header("location:demo.php");
    }else{
        $msg="Error";
    }
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
    <?php 
        echo (isset($msg)?$msg:"");
    ?>
    <form action="#"  method="post">
        Name <input type="text" placeholder="name " name="name"><br>
        Password <input type="password" placeholder="password " name="password"><br>

        <input type="submit" value="Log in" name="login">
       <a href="logout.php">Logout</a>
    </form>
</body>
</html>