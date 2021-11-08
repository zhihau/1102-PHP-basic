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
            text-align: center;
            border:1px solid black;
        }
        .dayoff{
            background-color:pink;
        }
    </style>
</head>
<body>
    <h1>線上月曆</h1>

    <?php

/*     $firstDay=date("Y-m-01");
    $month=date("m"); */
    $firstDay=date("Y-m-01");
    $month=date("m");
    $firstWeekWhiteDays=date("w",strtotime($firstDay));
    $monthDays=date("t",strtotime($firstDay));
    $firstWeekDays=7-$firstWeekWhiteDays;
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7);
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7;
    $lastWeekWhiteDays=7-$lastWeekDays;
    echo "最後一天天數".$lastWeekDays;
    echo "<br>";
    echo "weeks".$weeks;
    echo "<br>";
        echo "第一周的天數".$firstWeekDays;
        echo "<br>";
        echo "monthDays".$monthDays;
        echo "<br>";
    echo "firstday".$firstDay;
    echo "<br>";
    echo "month".$month;
    echo "<br>";
    echo "firstWeekWhiteDays".$firstWeekWhiteDays;
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    
    echo "</tr>";
    for($i=0;$i<$weeks;$i++){ //決定當月有幾周
        echo "<tr>";
        if($i==0){
            //印空白日
            for($k=0;$k<$firstWeekWhiteDays;$k++){

                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }
            
            for($l=0;$l<$firstWeekDays;$l++){
                $date=date("Y-m-").($i*7+$l+1);
                $w=date('w',strtotime($date));
                if($w==0 || $w==6){
                    echo "<td class='dayoff'";
                }else{
                    echo "<td>";
                }
                echo "<td>";
                echo $i*7+$l+1;
                echo "</td>";
            }
            
        }elseif($i==$weeks-1){
            for($m=0;$m<$lastWeekDays;$m++){
                
                echo "<td>";
                echo $i*7+$m+1-$firstWeekWhiteDays;
                echo "</td>";
            }
            for($n=0;$n<$lastWeekWhiteDays;$n++){
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

        }else{

            for($j=0;$j<7;$j++){
                
                if($w==0 || $w==6){
                    echo "<td class='dayoff'";
                }else{
                    echo "<td>";
                }
                echo "<td>";
                echo $i*7+$j+1-$firstWeekWhiteDays;
                echo "</td>";
    
            }
        }
        echo "</tr>";   
    }
    echo "</table>";
    ?>
</body>
</html>