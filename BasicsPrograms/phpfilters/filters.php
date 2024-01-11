<?php

//Validate an integer

$num=500;



if (!filter_var($num, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
  } else {
    echo("Integer is not valid");
  }



  
?>