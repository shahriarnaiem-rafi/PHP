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

if(isset($_POST['edit'])){
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sqlup="UPDATE info2 SET name='$name',email='$email',phone='$phone' where id=$id";

    if(mysqli_query($db, $sqlup)==true){
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
</head>

<body>

    <form action="" method="post">
        Id <br><input type="number" name="id"  value="<?php echo "$id";?>" readonly><br>
        Name <br><input type="text" name="name" value="<?php echo "$name";?>"><br>
        Email <br><input type="text" name="email" value="<?php echo "$email";?>"><br>
        Phone <br><input type="number" name="phone"value="<?php echo "$phone";?>"><br>

        <br>
        <input type="submit" value="Confirm" name="edit">

    </form>

</body>

</html>