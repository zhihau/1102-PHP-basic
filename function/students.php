<?php include_once "./db.php";?>

<?php
// $stu=find('students',23);
// echo $stu['name']."-".$stu['address']."<br>";
echo "<pre>";
print_r(all('students',['department'=>'國際貿易科']));
echo "</pre>";
?>