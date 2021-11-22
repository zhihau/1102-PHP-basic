<?php
session_start();

// 理想的寫法 曹狀迴圈  如果有user就做甚麼  如果有alert就做甚麼
if (!(isset($_SESSION['user']) && isset($_SESSION['alert']))) {
    header("location:../index.php");
    exit();
}


$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
$user_id = $pdo->query("select `id` from `account` where `account`='{$_SESSION['user']}'")->fetchColumn();

$sql_account = "DELETE FROM `account` where `id`='{$user_id}'";
$sql_member = "DELETE FROM `member` where `id`='{$user_id}'";

$pdo->exec($sql_account);
$pdo->exec($sql_member);
// 刪資料 同時要清cookie session, 管理員就不需要
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
if(isset($_SESSION['alert'])){
    unset($_SESSION['alert']);
}

header("location:../index.php");
