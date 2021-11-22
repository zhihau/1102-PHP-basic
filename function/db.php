<?php
function pdo($db)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=$db";
    return new PDO($dsn, 'root', '');
}

$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');//只會new 依次，不占server 資源

function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM `$table` where `id`='$id'";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function all($table){
    global $pdo;
    $sql="SELECT * FROM `$table`";
    echo $sql;//查語法下的對不對
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);//返回以欄位名稱作為索引鍵(key)的陣列(array)，例如
    
}

/*
* update 函式設計
*1.指定資料表table=>string
*2.指定更新的欄位
*3.指定更新的條件
*4.????
*/
$column=array('date'=>'2021-11-22',
'place'=>'泰山訓練場');
$where=['payment_method'=>'信用卡','classification'=>'教育'];

$sql="";
foreach ($arr as $key => $value) {
    echo "before execute=>$sql<br>";
    $sql=$sql . "`$key`='$value' AND ";
    echo "after execute=>$sql<br>";
}

echo "finish loop=>".trim($sql," AND ");
// mb_substr($sql,0,mb_strlen($sql)-5);等於trim($sql," AND ");
// function update($table,$id){
function update($table,$column,$where){
    global $pdo;
    $sql_set="";
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set," AND ");
    $sql_where="";
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value',";
    }
    $sql_where=trim($sql_where," AND ");
    $sql="update `$table` set $sql_set where $sql_where";
    
    $pdo->exec($sql);//更新 新增 刪除不需要有回傳直，所以不需要用查詢指令
}
update('expenditure',$column,$where);
// 制定函數功能不用在寫一大串
?>
