<?php

session_start();

if(isset($_POST['time'])){
    $time = $_POST['time'];
    if(empty($time)){
        header("Location:index.php?err=You havent entered the time!");
        exit();
    }
    else{
        $_SESSION['time'] = $time;
        header("Location:result.php");
        exit();
    }
}

?>