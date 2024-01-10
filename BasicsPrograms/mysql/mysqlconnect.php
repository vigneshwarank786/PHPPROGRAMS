<?php
$host="localhost";
$user="root";
$pass="";
$db="testing";

$conn=mysqli_connect($host,$user,$pass,$db);

if(! $conn)
{
    echo ("The connection is not connected".mysqli_connect_error());
}
else{
    echo ("The successfuly connected"."<br/>");
}


?>