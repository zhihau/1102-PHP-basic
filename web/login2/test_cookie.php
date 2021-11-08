<?php

setcookie('item','mac bookpro', time()+600);//在客戶端執行設cookie
echo $_COOKIE['item'];//在伺服器端執行出現錯誤，因為伺服器還不知道有這個cookie Warning: Undefined array key "item" in D:\php\web\login2\test_cookie.php on line 4
?>