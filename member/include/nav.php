<?php
if(isset($_SESSION['user'])){
?>
    // 會員中心的nav
    <nav>
    <a href="index.php">回首頁</a>
    <a href="dashboard.php">會員中心</a>
    <a href="change_pw.php">修改密碼</a>
    <a href="edit_user.php">編輯會員資料</a>
    <a href="logout.php">登出</a>

</nav>
<?php
}else{
    ?>
    <nav>
    <a href="index.php">回首頁</a>
    <a href="forgot.php">忘記密碼</a>
    <a href="reg.php"><button>註冊新會員</button></a>

</nav>
<?php
}
?>