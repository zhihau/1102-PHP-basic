<?php
 $book=$_POST['book'];
if($book=='討厭'){

    echo "<span style='color:red'>";
    echo $book;
    echo "</span>";
}else{
    echo "書名錯誤";
}
?>