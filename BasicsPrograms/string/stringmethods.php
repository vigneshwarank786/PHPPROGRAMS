<?php

$a="Hello World!";

echo strlen($a)." str length <br/>";

echo str_word_count($a)." string count <br/>";


echo strpos($a,"world")."  find a str <br/>";

echo strtoupper($a)." uppercase <br/>";

echo strtolower($a)." lowercase <br/>";

echo str_replace("World!","Coder",$a)." str replace";


echo substr($a,4,4)."<br/>";


echo substr($a,6)."<br/>";

echo substr($a,-5,3)."<br/>";

echo substr($a,5,-3)."<br/>";





?>