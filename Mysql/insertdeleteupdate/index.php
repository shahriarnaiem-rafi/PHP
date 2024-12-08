<?php
$db = mysqli_connect("localhost", "root", "", "sql8");

if (isset($_POST['submit'])) {
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
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"],
        form input[type="number"] {
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

        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Database Information</h1>
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required><br>

        <label for="phone">Phone</label><br>
        <input type="number" id="phone" name="phone" required><br>

        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    $user = $db->query("SELECT * FROM info2");
    $count = 1;
    echo "<table>
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
                <td><a href='edit.php?editid=$id'>Edit</a></td>
                <td><a href='delete.php?deleteid=$id'>Delete</a></td>
            </tr>";
        $count++;
    }
    echo "</table>";
    ?>
</body>

</html>
