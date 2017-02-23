<?php 

// php入库
$sql1 = "<a href='1.html'> hello'diwali</a>";

$sql2 =  htmlspecialchars(addslashes($sql1));
echo $sql2.PHP_EOL;

$sql3 =  stripslashes(htmlspecialchars_decode($sql2));
echo $sql3





?>