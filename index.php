<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Hours Wasted</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="calc.php" method="post">
    <h1>Hours wasted on apex</h1>
    <label for="time">Hours in Apex:</label><br>
    <input type="text" name="time" id="time"><br>
    <?php
    if(isset($_GET['err'])){
        echo('<p class="error">'.$_GET['err'].'</p>');
    }
    ?>
    <button type="submit" value="apex">Prepare for disappointment</button>

    </form>
    
</body>
</html>