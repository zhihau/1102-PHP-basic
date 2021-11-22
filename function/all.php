<?php

// echo "<pre>";
// print_r(all('students'));
// echo "</pre>";
// $rows=all('students');
// foreach($rows as $row){
//     echo $row['name']."-".$row['address']."<br>";
// }
// 取出指定資料表的所有資料
function all($table){
    // 宣告成一個全域變數
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table`";
    echo $sql;//查語法下的對不對
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);//返回以欄位名稱作為索引鍵(key)的陣列(array)，例如
    // [id] => 1
    //         [uni_id] => 911001
    //         [seat_num] => 10101
    //         [name] => 丁小雨
    //         [birthday] => 2010-10-10
    //         [national_id] => C100000012
    //         [address] => 台中縣大甲鎮安和一街4巷4-3號4F
    //         [parent] => 丁世傑
    //         [telphone] => 04-13310667
    //         [major] => 商業經營科
    //         [secondary] => 台中市市立安樂國中畢業
}
// echo "<pre>";
// print_r(find('students',1));
// echo "</pre>";
// $row=find('students',1);
// echo $row['name']."-".$row['address']."<br>";
// 取出指定資料表上id為多少的資料
function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` where `id`='$id'";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
// echo update('students',1);
// echo "<pre>";
// print_r(find('students',1));
// echo "</pre>";

// 取出更新資料表上id為多少的欄位資料，沒有id欄位就找步道
function update($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="update `$table` set `major`='商業經營科',`secondary`='台中市市立安樂國中畢業' where `id`='$id'";
    
    return $pdo->exec($sql);
}
//         [uni_id] => 911001
    //         [seat_num] => 10101
    //         [name] => 丁小雨
    //         [birthday] => 2010-10-10
    //         [national_id] => C100000012
    //         [address] => 台中縣大甲鎮安和一街4巷4-3號4F
    //         [parent] => 丁世傑
    //         [telphone] => 04-13310667
    //         [major] => 商業經營科
    //         [secondary] => 台中市市立安樂國中畢業
    // echo insert('students');

// 新增資料到指定資料表
function insert($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="insert into `$table` (`uni_id`,`seat_num`,`name`,`birthday`,`national_id`,`address`,`parent`,`telphone`,`major`,`secondary`) values ('912001','10111','阿雷拉','2021-11-22','W111112','阿雷島','阿雷霸','05-7788','機械科','雷霸國中畢業')";
    echo $sql;
    return $pdo->exec($sql);
}

function del($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="delete from `$table` where `id`='481'";
    echo $sql;
    return $pdo->exec($sql);
}
echo del('students');
?>