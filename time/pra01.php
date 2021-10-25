<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期，計算中間間隔天數</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <span>開始日期:2021-10-1</span>
    <span>結束日期:2021-11-3</span>
    <?php
    date_default_timezone_set('Asia/Taipei');
       echo date("Y-m-d H:i:s");
       echo "<br>";
       echo date("Y-m-d H:i:s",0);
       echo "<br>";
       echo date("Y-m-d H:i:s",10000);
       echo "<br>";
       echo strtotime('1970-1-1 01:01:01');
       echo "開始的秒數" . strtotime('2021-10-1');
       echo "<br>";
       echo "結束的秒數" . strtotime('2021-11-3');

       $gapDays=(strtotime('2021-11-3') - strtotime('2021-10-1'))/(24*60*60);
       echo "<br>間隔".$gapDays."天";
    ?>
</body>
</html>