<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super globla variable</title>
</head>

<body>
    <form action="" method="post">
        Enter the Number:<br>
        <input type="number" name="number"><br><br>


        <input type="submit" value="Submit">

    </form>
    <?php


    

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['number'];
       if($num<=1){
            echo "Not Prime number";
       }
       else{
            for($i=2; $i<$num; $i++){
                 if($num%$i==0){
                    $count++;
                    break;
                 }
            }
            if($count==0){
                echo " prime";
            }
            else{
                echo "not prime";
            }
        
       }
    }





    ?>
</body>

</html>