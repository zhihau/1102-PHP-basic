<?php
// 遠端
// $dsn="mysql:host=localhost;charset=utf8;dbname=s1100423";
// $pdo=new PDO($dsn,'s1100423','s1100423');
// 本地端
$dsn="mysql:host=localhost;charset=utf8;dbname=s1100423";
$pdo=new PDO($dsn,'root','');

$sql="select * from `user` where id=1";
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($user);
echo "</pre>";

















?>