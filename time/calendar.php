<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            width:500px;
            margin:auto;
            padding:20px;
            border:1px solid black;
        }
        td{
            padding:5px;
            text-align:center;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>線上月曆</h1>
    <?php
    $firstDay=date("Y-m-01");
    $month=date("m");
$firstWeekFirstDay=date("w",strtotime($firstDay));
echo "firstDay".$firstDay;
echo '<br>';
echo "month".$month;
echo '<br>';
echo "firstWeekFirstDay".$firstWeekFirstDay;
echo '<br>';
    echo '<table>';
    
    echo '<tr>';
    echo '<td>日</td>';
    echo '<td>一</td>';
    echo '<td>二</td>';
    echo '<td>三</td>';
    echo '<td>四</td>';
    echo '<td>五</td>';
    echo '<td>六</td>';
    
    echo '</tr>';
    for($i=0;$i<6;$i++){
        echo '<tr>';
        // $whiteDay=;
        for($j=0;$j<7;$j++){
            if(($i==0&&$j<$firstWeekFirstDay)||($i==$firstWeekFirstDay&&$j>0)){
                echo '<td>&nbsp;</td>';
            }
            else{
                echo '<td>'.
                $i*7+$j-$firstWeekFirstDay .
                '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>