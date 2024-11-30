<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="#" method="post">
        Name
        <input type="text" name="name" placeholder="enter name"><br><br>
        email
        <input type="text" name="email" placeholder="enter email"><br><br>
        Password
        <input type="password" name="password" placeholder="enter password"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <br>
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $nameNan = "/^[A-Za-z]{2,8}$/";
        if (!preg_match($nameNan, $name)) {
            echo "please enter a vlid name <br>";
        } else {

            echo $name."<br>";
        }
        $email = $_POST['email'];

        $emailNan = "/^[A-Za-z)-9]+@[a-z]+\.[a-z]{2,8}$/";
        if (!preg_match($emailNan, $email)) {
            echo "please enter a vlid email<br>";
        } else {

            echo $email."<br>"; 
        }

        $password = $_POST['password'];
        if($password==1234){
            echo "$password";
        }
        else{
            echo " ja bag";
        }
    }
    ?>
</body>

</html>