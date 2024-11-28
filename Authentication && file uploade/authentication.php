<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>

<body>

    <form action="#" method="post">
        <fieldset>
            <label for="">Name</label>
            <input type="text" placeholder="name" name="name"><br>
            <label for="">Password</label>
            <input type="password" placeholder="Password" name="password"><br>

            <br>

            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" ><br>

        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];


        $nameNan = "/^[a-zA-Z]{4,8}$/";
        
        if (!preg_match($nameNan, $name)) {
            
            echo "enter a valid name";
        }
        else{
            echo $name;
        }
        $password = $_POST['password'];
        if ($password == 4321) {
            echo "<br>$password";
        }else{
            echo "<br>enter a vlid pass";
        }
    }
    ?>

</body>

</html>