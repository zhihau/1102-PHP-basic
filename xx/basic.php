<?php
include "./commonFun/commonFun.php";
// $errArr = [
//     "id3 del",
//     "",//id5 del",
//     "id7 del",
// ];

$age=[
"p"=>"3",
"b"=>"4",
"j"=>"6"
];
dd($errArr);
dd($age);

$car=array(
    array("vo",22,18),
    array("bmv",15,14),
    array("sas",5,19),
    array("land",17,15),
);

$errArr = [
    ['id'=>'s1','message'=>'dels1','type'=>"danger"],
    ['id'=>'s2','message'=>'dels2','type'=>"danger"],
    ['id'=>'s3','message'=>'dels3','type'=>"danger"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container-fluid">
        <!-- 有訊息才會顯示alert -->
        <?php foreach ($errArr as $key => $value) : ?>
            <?php foreach ($value as $k => $v) : ?>
<?php if($k=='message'):?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $v; ?>
            </div>
<?php endif?>
        <?php endforeach; ?>
        <?php endforeach; ?>


    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>