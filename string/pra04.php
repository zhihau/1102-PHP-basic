<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字串與HTML、css整合應用</title>
</head>
<body>
    <style>
        .font-effect{
            font-size:30px;color:blue;font-weight:600;
        }
        .font-effect:hover{
            color:green;
        }
    </style>
<h1>尋找字串與HTML、css整合應用</h1>
<h3>給定一個句子，將指定的關鍵字放大</h3>
<ul>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<?php
$str='學會PHP網頁程式設計，薪水會加倍，工作會好找';
$sub='程式設計';
//方法二
$style="<span class='font-effect' style=''>" . $sub . "</span>";
$t=str_replace($sub,$style,$str);
echo $t . '<hr>';

//方法一
$array=explode($sub,$str);
echo $split[0].
"<span style='font-size:30px;color:red'>" . 
$sub . 
"</span>" . 
$split[1];

$array=explode($sub,$str);
echo '字串分割與結合<pre>';
print_r($array);
echo '</pre>';
echo '<br>';
array_splice($array,1,0,"<span style='font-size:30px;color:red'>" . $sub . "</span>");
echo '<pre>';
print_r($array);
echo '</pre>';
$t=join('',$array);
echo $t . '<hr>';

echo '<hr>';

$a1=array("a","b","c","d");
$a2=array("x","y");
print_r(array_splice($a1,0,2,$a2));

?>
學會PHP網頁<span style='font-size:30px;color:red'>程式設計</span>，薪水會加倍，工作會好找
</body>
</html>