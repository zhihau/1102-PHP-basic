<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include "./include/head.php";?>
    
</head>
<body>
    <!-- 跟目錄開始算，/include -->
    <!-- 抓機器本身的跟目錄 -->
    <!-- <?php include __FILE__."/include/header.php";?> -->
    <?php include "./include/header.php";?>
    <?php include "./include/nav.php";?>
    <?php include "./include/side_bar.php";?>
    <div class="content">
<h3>會員中心</h3>

  <?=$_GET['user']?>  歡迎你:<br>
  <?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=member";
  $pdo=new PDO($dsn, 'root','');
  $sql="select * from `account`,`member` where `account`.`id`=`member`.`id` && `account`.`account`='{$_GET['user']}'";
  $user=$pdo->query($sql)->fetch();

  ?>
<li>個人資料:
<li>帳號:<?=$user['account']?></li>
<li>地址:<?=$user['address']?></li>
<li>電話:<?=$user['mobile']?></li>
<li>mail:<?=$user['mail']?></li>
<li>生日:<?=$user['birthday']?></li>
    </div>
    <?php include "./include/footer.php";?>
    
</body>
</html>