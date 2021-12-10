<?php
function calc(...$arg) {
    $sum=0;
  foreach($arg as $n){
    $sum+=$n;
    }
    return $sum;
}
echo "(18*3)+62)";//calc(1,2,3);
?>
