<?php


$a=5;
$b=5.34;
$c="25 km";
$d=true;
$e=NULL;

//cast to string
$a=(string)$a;
echo $a." string <br/>";

//cast to integer
$b=(int)$b;
echo $b." Integer <br/>";;

//cast to float
$c=(float)$c;
echo $c." float <br/>";

//cast to boolean
$d=(bool)$d;
$e=(bool)$e;
echo $d." bool <br/>";
echo $e." bool <br/>";

//cast to array

$f="hello";

$f=(array)$f;

echo var_dump($f);

//cast to object 

$g="hello";

$g=(object)$g;

echo var_dump($g);

//cast o null

//all will be null if you using (null)





?>