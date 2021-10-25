<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <div>老師的生日10-7</div>
    <div>我的生日11-3</div>
    <?php
date_default_timezone_set('Asia/Taipei');
$birthday = '2021-11-3';
$tbirthday = '2022-10-7';
$now=strtotime('now');
$gapDays = (strtotime($birthday) -$now) / (24 * 60 * 60);
echo "<br>我的生日間隔" . $gapDays . "天";
$gapDays = (strtotime($tbirthday) -$now) / (24 * 60 * 60);
echo "<br>老師的生日間隔" . floor($gapDays) . "天";
echo "<br>";
$year=floor(floor($gapDays)/365);
echo $year; 
echo "<br>";
$month=floor(floor(floor($gapDays)%365)/30);
echo $month;
echo "<br>";
$days=floor(floor($gapDays)%365)%30;
echo $days;
echo "我的下次生日還有".$year."年".$month."月".$days."日";
?>
</body>
</html>