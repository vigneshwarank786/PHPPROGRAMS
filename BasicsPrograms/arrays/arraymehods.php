<?php
$a=["one","two","three"];

echo count($a)."  count array <br/>";

array_splice($a,0,1,"zero");

 echo var_dump($a);


 echo sort($a);

 echo var_dump($a);


 function mycallback($data)
 {
return strlen($data);
 }

 $b=["apple","orange"];

 $result=array_map("mycallback",$b);

print_r($result);

// unset($a);



?>