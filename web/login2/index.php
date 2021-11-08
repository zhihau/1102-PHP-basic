<?php
if(isset($_COOKIE['user'])){
    header('location:mem_center.php');//在他執行之前不能有任何輸出
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align:center;
            box-sizing:border-box;
            /* padding:0;
            margin:0; */
        }
        .main{
            border:1px solid darkgrey;
            margin:0 auto;
            width:436px;
            height:248px;
            box-shadow:1px 1px 10px #999;
        }
        table{
            background-color:pink;
        }
        h1{
            color:orange;
        }
        #account, #password{
            border: 0px;
    border-bottom: 1px solid darkgray;
    text-align: left;
    font-size: larger;
        }
    </style>
</head>
<body class="main">
    <h1>使用cookie登入並記錄登入狀態</h1>
<!-- php傳給自己 -->
    <h1>LOGIN</h1>
    <?php
if (isset($_GET['status'])&&$_GET['status']=='err') {

    echo "<span style='color:red'>帳號或密碼錯誤<br>登入失敗<span>";


}
?>
    <form action="check_login.php" method="post">
        <p><input type="text" name="acc" id="account" placeholder="帳號"></p>
        <p><input type="password" name="pw" id="password" placeholder="密碼"></p>
        <p>
            <input type="submit" value="登入">
            <input type="reset" value="取消">
    </p>
    </form>

</body>
</html>
