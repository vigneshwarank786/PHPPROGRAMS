<?php
$filename="./demo.txt";
$fp=fopen($filename,"r");
$contents=fread($fp,filesize($filename));
echo "<h1>$contents<h1/>";
fclose($fp);
?>