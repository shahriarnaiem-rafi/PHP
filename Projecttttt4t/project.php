<?php session_start();?>
<?php
if (isset($_POST['submitted'])) {
    $img = "img/";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $emailNan = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";;


    $password = $_POST['password'];


    $filename = $_FILES["my-file"]["name"];
    $temp = $_FILES["my-file"]["tmp_name"];
    $size = $_FILES["my-file"]["size"];
    $in = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    $kb = 100 * 1024;
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regform</title>
    <style>
        body {
            display: flex;
        }
        form{
            background-color: lightblue;
            padding: 30px;
            width: 400px;
            border-radius: 50px 20px 20px 50px;
            
        }
        .output{
            margin-left: 20px;
            margin-top: 10px;
            width: 300px;
            background-color: lightgoldenrodyellow;
            padding: 30px;
            border-radius: 50px 20px 20px 50px;
            height: 250px;
        }
    </style>
</head>

<body>
    <div>
        <h2 style="text-align: center;">Registration Form</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <label>Name</label><br>
            <input type="text" name="name" placeholder="Enter your name " required><br>
            <label>Email</label><br>
            <input type="text" name="email" placeholder="Enter your email "><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter your name "><br>
            <br>
            <label for="">Picture</label><br>
            <input type="file" name="my-file">
            <br>
            <input type="submit" value="Submit" name="submitted">

            <br><br><br>

        </form>

    </div>
   
    <div> <h2 style="text-align: center;">Result</h2>
    <div class="output">
        
        <?php
        echo "Name: "."$name" . "<br>";
        if (preg_match($emailNan, $email)) {
            echo "Email: ".$email. '<br>';
        }else{
            echo "enter a valid email<br>";
        }

        if (!($password == 1234)) {
            echo "incorrect pass<br>";
        } else {
            echo "Password: "."$password . <br>";
        }

        if (!empty($filename)) {
           
            if ($size > $kb   ) {
                $img = "img/";
                echo "resulation is too hight<br>";
            }
            else if(!in_array($in,["jpg","webp"])){
                echo "type invalid";
            }
         else {
                $img = "img/";
                move_uploaded_file("$temp", "$img.$filename");
            }
        }else {
            echo " please enter something";
        }
        echo "<img title='car picture' src='$img.$filename' alt='img' style='width:200px; heaight:200px; border-radious:10px;' ><br>";




        ?>
    </div>
    </div>

</body>

</html>