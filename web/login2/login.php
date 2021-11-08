<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入結果</title>
</head>
<body>
<?php
if (!empty($_POST)) {
    $acc = $_POST['account'];
    $pw = $_POST['password'];

    if ($acc == 'mack' && $pw = '1234') {
        echo "帳號密碼正確<br>登入成功";
    } else {
        echo "帳號或密碼錯誤<br>登入失敗";

    }
} else {
    echo "<h1 style='color:red;'>非法登入</h1>";
}

?>
<!-- <a href="index.php?bmi=<?=$bmi;?>">回首頁</a> -->
</body>
</html>