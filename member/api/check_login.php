<?php
// $account=$_POST['account'];
// $password=$_POST['password'];
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
// 只有陣列是大括號 大括號裡面的東西當變數
echo $sql;
//SELECT 
// 下面這句背起來 檢定會考
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
echo "<br>";
// $result=$pdo->query($sql);
// var_dump($result);
// echo "<br>";

$result=$pdo->query($sql)->fetchColumn();//一次只拿一筆資料，是個一為陣列
// var_dump($result);
echo $result['account'];
echo $result['password'];
// fetchall一定是二為陣列
if($result>0){
    // echo "登入成功";
    header('location:../dashboard.php');//header前面不要echo任何東西
}else{
    // echo "帳號或密碼錯誤";
    header('location:../index.php?err=1');
}
?>