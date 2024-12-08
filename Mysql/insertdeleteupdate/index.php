<?php
$db = mysqli_connect("localhost", "root", "", "sql8");

if (isset($_POST['submit'])) {
    //$id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO info2(name,email,phone) VALUES('$name', '$email','$phone')";
    if (mysqli_query($db, $sql) == TRUE) {
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <form action="" method="post">
        <!-- Id <br><input type="number" name="id"><br> -->
        Name <br><input type="text" name="name"><br>
        Email <br><input type="text" name="email"><br>
        Phone <br><input type="number" name="phone"><br>

        <br>
        <input type="submit" value="submit" name="submit">

    </form>
    <?php
    $user = $db->query("SELECT * FROM  info2");
    $count=1;
    echo "<table border='1' style='border-collapse:collapse; text-align:center;'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>";
    while (list($id, $name, $email, $phone) = $user->fetch_row()) {
        echo "<tr>
                <td>$count</td>
                <td>$name</td>
                <td>$email</td>
                <td>$phone</td>
                <td>
                <a href='edit.php?editid=$id'>Edit</a> 
                </td> 
                <td>
                
                <a href='delete.php?deleteid=$id'>Delete</a>
                </td> 
                
            </tr>";
            $count++;
    }
    echo "</table>";

    ?>



</body>

</html>