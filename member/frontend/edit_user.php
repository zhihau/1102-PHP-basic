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