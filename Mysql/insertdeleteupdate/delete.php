<?php
include("index.php");
if (isset($_GET["deleteid"])) {
    $id=$_GET['deleteid'];
    $sql="DELETE FROM info2 where id=$id";
    if(mysqli_query($db,$sql)) {
        header("location:index.php");
    }
}

?>