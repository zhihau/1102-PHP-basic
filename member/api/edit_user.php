<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday=$_POST['birthday'];
// 查資料清洗 php

//更新的sql語法  以及用小寫語法  一次更新一次資料表名稱, del, update比較危險的操作
// 該控伊格要空一格
$sql_account="UPDATE `account` SET `mail`='$mail' where `id`='$id'";
$sql_member="UPDATE `member` 
                SET `address`='$address',
                    `mobile`='$mobile',
                    `birthday`='$birthday'
                where `id`='$id'";

//執行更新
$pdo->exec($sql_account);
// echo "<hr>";
$pdo->exec($sql_member);
// 回到首頁   回到編輯資料葉面，確認資料是否更新無誤    回到dashboard
// get post 要記得網址是否要帶參數  沒有帶會出現錯誤
header("location:../dashboard.php?user={$_GET['user']}");
?>