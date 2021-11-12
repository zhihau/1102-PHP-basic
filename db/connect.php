<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
// $dbuser='root'
$pdo=new PDO($dsn,'root','');


$range=(isset($_GET['id']))?$_GET['id']:20;//葉面呈現動態

$sql="select * from `students` where `id`< $range";
// $sql="select `name`,`secondary` from `students` where `secondary` like '%安樂國中%' and `name` like '陳%'";
$rows=$pdo->query($sql)->fetchAll();
// $pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');
// echo "<pre>";
// var_dump($rows);//適用所有型態  印出是甚麼型態，更實用
// // 1.確定變數型太  2.再決定怎麼處理他
// echo "</pre>";
?>
<style>
    table{
        border:3px solid black;
        border-collapse: collapse;
    }
    td{
        border:1px solid black;
        padding: 5px 14px;
    }
    tr:nth-child(odd){
        background-color: lightgreen;
    }
    tr:nth-child(even){
        background-color: pink;
    }
</style>
<table>
    <tr>
        <td>學號</td>
        <td>座位</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>
    <?php
foreach($rows as $row){
    echo "<tr>";//可讀性比較高
    echo  "<td>" . $row['uni_id'] . "</td>";
    echo  "<td>" . $row['seat_num'] . "</td>";
    echo  "<td>" . $row['name'] . "</td>";
    if(mb_substr($row['national_id'],1,1)==1){
        echo "<td>男生</td>";
    }else{
        echo "<td>女生</td>";

    }
    echo  "<td>" . $row['birthday'] . "</td>";
    echo "<td>" .  $row['secondary'] . "</td>";
    echo "</tr>";
}
?>
</table>
<!-- 表單給予不同的參數，得到不同結果
?id=50 -->