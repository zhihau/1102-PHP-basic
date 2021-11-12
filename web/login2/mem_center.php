<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mem center</title>
</head>
<body>
    welcom
    <?php
    session_start();
    if(isset($_COOKIE['user'])){

        echo $_COOKIE['user'];
    }else{

        echo $_SESSION['user'];
    }
    ?>
</body>
</html>