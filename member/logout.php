<?php

session_start();
unset($_SESSION['user']);  //規則 次要性的東西 還原 不設定

header("location:index.php"); //或有專門logout頁面 告訴你已經登出





?>