<?php
$acc='mack';
$pw='1234';
session_start();
if($acc==$_POST['acc'] && $pw=$_POST['pw']){
    // setcookie("user",$_POST['acc'],time()+3600);//寫程式的過程中盡量用變數
    // $_SESSION['status']=1;//1登入成功
    $_SESSION['user']=$_SESSION['acc'];//打紙本卡
header("location:mem_center.php");//header導向
}else{
header("location:index.php?status=err");//header導向 只做一次傳輸用get
}

?>