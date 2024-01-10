<?php
$i=1;
while($i<=3)
{
    $j=1;
   while($j<=3)
   {
         $k=1;
         while($k<=3)
         {
            $multi=2;
            echo $i*$multi." ".$j*$multi." ".$k*$multi."<br/>";
            $k++;
         }
     $j++;
   }
   $i++;
}