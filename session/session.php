<?php

session_start();

$_SESSION['name']='mack';
echo $_SESSION['name'];
$_SESSION['students']=['zang','wang'];
?>