<?php

session_start();

include('functions.php');

if(isset($_SESSION['time'])){
    $time = $_SESSION['time'];
}

else{
    header("Location:index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="result.css">
    <script src="https://kit.fontawesome.com/0a4f5afbb3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="cont">
        <h1><?php echo('You have spent '.$time.' hours on Apex')?></h1>
        <p>You could have read <?php echo bookTime($time)?> books</p>
        <i class="fa-solid fa-book"></i>
        <hr>

        <p>You could have watched <?php echo movieTime($time)?> movies</p>
        <i class="fa-solid fa-film"></i>
        <hr>

        <?php kmTime($time);  ?>
        <i class="fa-solid fa-arrow-trend-up"></i>
        <hr>

        <?php breakingTime($time);?>
        <i class="fa-solid fa-vial"></i>
        <hr>

        <?php everestTime($time)?>
        <i class="fa-solid fa-mountain"></i>
        <hr>

        <a href="index.php">Try again</a>
        
        
        
    </div>
</body>
</html>