<?php

$fp=fopen("./demo.txt","r");
echo fgets($fp);
fclose($fp);
?>