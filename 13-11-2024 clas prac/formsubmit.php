<?php
    echo $_GET['fname'];
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="get">

    <input type="text" name="fname">
    <input type="submit" value="submit">
</form>