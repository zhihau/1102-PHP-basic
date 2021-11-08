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
$users=[
 ['acc'=>'mack','pw'=>'1234'],
 ['acc'=>'judy','pw'=>'5678'],
 ['acc'=>'james','pw'=>'4444'],
 ['acc'=>'mary','pw'=>'8888'],
];
if (!empty($_POST)) {
    $acc = $_POST['account'];
    $pw = $_POST['password'];
    $test=false;//立flag
    foreach($users as $user){
        if ($acc == $user['acc'] && $pw == $user['pw']) {
            
            $test=true;
        }
    }
    if($test==false){
        echo "帳號或密碼錯誤<br>登入失敗";
    }else{
        echo "帳號密碼正確<br>登入成功";
    }
}
?>
    <form action="index_array.php" method="post">
        <p><input type="text" name="account" id="account" placeholder="帳號"></p>
        <p><input type="password" name="password" id="password" placeholder="密碼"></p>
        <p>
            <input type="submit" value="登入">
            <input type="reset" value="取消">
    </p>
    </form>
<!-- <a href="index.php?bmi=<?=$bmi;?>">回首頁</a> -->
</body>
</html>