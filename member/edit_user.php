<?php
session_start();
if(!isset($_SESSION['user'])){
    // echo "非法登入";
    header("location:index.php");
    exit();//後面的不執行
    exit();//後面的不執行
}
?>
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
編輯會員資料
<?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=member";//請把這個練熟
  $pdo=new PDO($dsn, 'root','');
  $sql="select * from `account`,`member` 
                where `account`.`id`=`member`.`id` && 
                      `account`.`account`='{$_SESSION['user']}'";
//   $sql="select `member`.`address`,
//                `member`.`mobile`,
//                `account`.`mail`,
//                `member`.`birthday`
//                 from `account`,`member` 
//                 where `account`.`id`=`member`.`id` && 
//                       `account`.`account`='{$_SESSION['user']}'";
  echo $sql;
  $user=$pdo->query($sql)->fetch();

  ?>
  <!-- 表單直接加參數 -->
<form action="./api/edit_user.php?user=<?=$_SESSION['user']?>" method="post" style="display:flex;flex-direction:column;width:30%;font-size:20px" id="editUserForm">
<!-- <p> -->
<label for="id">id:</label><?=$user['id']?>
<input type="hidden" name="id" id="id" value="<?=$user['id']?>">

<label for="address">地址:</label>
<input type="text" name="address" id="address" value="<?=$user['address']?>">
<!-- </p> -->
<!-- <p> -->
<label for="mobile">電話:</label>
<input type="text" name="mobile" id="mobile" value="<?=$user['mobile']?>">
<!-- </p>
<p> -->
<label for="mail">mail:</label>
<input type="text" name="mail" id="mail" value="<?=$user['mail']?>">
<!-- </p>
<p> -->
<label for="birthday">生日:</label>
<input type="date" name="birthday" id="birthday" value="<?=$user['birthday']?>">
<input type="submit" value="更新">
<!-- </p> -->



</form>
    </div>
    <?php include "./include/footer.php";?>
    
</body>
</html>