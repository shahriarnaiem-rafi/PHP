<?php
$db = mysqli_connect("localhost", "root", "", "sql8");
$id = $_GET['editid'];
$sql = "SELECT * FROM info2 where id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sqlup = "UPDATE info2 SET name='$name', email='$email', phone='$phone' where id=$id";

    if (mysqli_query($db, $sqlup) == true) {
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
        }

        form {
            background-color: #fff;
            padding: 20px;
            margin: 40px auto;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        form input[type="number"],
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <h1>Edit Information</h1>

    <form action="" method="post">
        <label for="id">Id</label><br>
        <input type="number" name="id" value="<?php echo "$id"; ?>" readonly><br>

        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?php echo "$name"; ?>"><br>

        <label for="email">Email</label><br>
        <input type="text" name="email" value="<?php echo "$email"; ?>"><br>

        <label for="phone">Phone</label><br>
        <input type="number" name="phone" value="<?php echo "$phone"; ?>"><br>

        <br>
        <input type="submit" value="Confirm" name="edit">
    </form>

</body>

</html>
