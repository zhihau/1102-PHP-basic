<form action="?" method="post">
    <input type="number" name="stars" id="">
    <input type="submit" value="送出">
</form>
<!-- ?表示當前頁自己傳給自己 -->


<?php
if(isset($_POST['stars'])){
    stars($_POST['stars']);
}

function add($a,$b){
    return $a+$b;
}
add(3,5);
echo "<br>";
echo add(3,6)+10;
$reult=add(3,5);
echo $reult+10;
echo "<br>";
echo "result=".$reult;
echo "<br>";
$users=array("aa","bb");
$c=0;
foreach($users as $user){
    $c++;
echo $c;
    hello($user);
    echo "<br>";
}

// 寫一個函數可以輸入名字
function hello($name){
    // 網頁上只會顯示一個空白 放很多空白沒有用
    echo "hello $name";
    echo "hello&nbsp;&nbsp;&nbsp;&nbsp;$name";
}
for($i=5;$i<6;$i=$i+2){

    stars($i);
}
function stars($row){
    for($j=1;$j<=$row;$j++){
        for($i=0;$i<($row-$j);$i++){
            // echo "&nbsp;&nbsp;";//&ensp;
            echo "&ensp;";
        }
        for($i=0;$i<(2*$j-1);$i++){
            echo "*";
        }
        for($i=0;$i<($row-$j);$i++){
            // echo "&nbsp;&nbsp;";//&ensp;
            echo "&ensp;";
        }
        echo "<br>";
    }
}

?>