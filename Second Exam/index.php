<?php
require_once("main.php");

if (isset($_POST['submitted'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];

    $main=new Main($id,$name,$batch);
    $main->save();


    header("location: ".$_SERVER["PHP_SELF"]);
    exit;


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            background-color: lightgoldenrodyellow;
        }
        form{
            margin-top: 30px;
        }
        fieldset {
            position: absolute;
            padding: 30px;
            background-color: lightblue;
            
            color: black;
            text-shadow: 1px 1px 1px red;
            margin-left:110px ;
            width: 220px;
            border-radius: 20px 0px 20px 0px;
            
        }
        .my{
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 20px 0px 20px 0px;

        }
    </style>
</head>

<body>
    <h2 style="text-align: center; text-shadow: 2px 1px 2px gray; font-size:35px ">Data</h2>
    <form action="#" method="post">
        <fieldset>
            Id <br><input type="text" name="id"><br><br>
            Name <br><input type="text" name="name"><br><br>
            Batch
            <select name="batch" id="">
                <option value="">Select Batch</option>
                <option value="62">62</option>
                <option value="64">64</option>
                <option value="63">63</option>
            </select><br><br>
            <input type="submit" name="submitted" value="Submit" class="my">
            <input type="reset"  value="Reset" class="my">

        </fieldset>

    </form>
    <?php
        Main::operation();
    ?>


</body>

</html>