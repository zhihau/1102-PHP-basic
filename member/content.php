<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "已登入";
} else {
    echo "未登入";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include "./include/head.php"; ?>

</head>

<body>
    <!-- 跟目錄開始算，/include -->

    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php
    if (isset($_GET['action']) && $_GET['action'] != 'login') {
        include "./include/side_bar.php";
    }
    ?>
    <!-- 動態仔入不同的頁面 -->
    <div class="content">
        <?php
        $action=(isset($_GET['action']))?$_GET['action']:'login';
        include "./frontend/".$action.".php";
        // switch ($_GET['action']) {
        //     case "login":
        //         include "./frontend/login.php";
        //         break;
        //     case "edit_user":
        //         include "./frontend/edit_user.php";
        //         break;
        //     case "dashboard":
        //         include "./frontend/dashboard.php";
        //         break;
        //     case "reg":
        //         include "./frontend/reg.php";
        //         break;
        //     default:
        //         include "./frontend/dashboard.php";
        // }




        ?>
    </div>
    <?php include "./include/footer.php"; ?>

</body>

</html>