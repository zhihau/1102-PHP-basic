<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號沒有重覆號碼

</title>
<link rel="stylesheet" href="./css/style.css">
<style>
    .ball{
        background:lightgreen;
        border-radius:50%;
        padding:16px;
        display:inline-block;
        margin:5px;
        width:16px;
    }
</style>
</head>
<body>
    <h1>威力彩電腦選號沒有重覆號碼</h1>
    <?php
    $nums=[];
    $i=0;
    while(count($nums)<6){
        $t=rand(1,38);
        if(!in_array($t,$nums)){
            $nums[]=$t;
        }
        $i++;
    }
    // echo "<pre>";
    // print_r($nums);
    // echo "</pre>";
    echo "迴圈次數:".$i;
    echo "<hr>";
    foreach($nums as $num){
        echo "<div class='ball'>".$num."</div> ";
    }
    ?>
</body>
</html>