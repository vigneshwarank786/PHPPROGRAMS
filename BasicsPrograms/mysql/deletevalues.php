<?php 
require_once("./mysqlconnect.php");


$sql="DELETE  from employee where emp_id=2";

$result=mysqli_query($conn,$sql);


if($result)
{
    echo ("The record deleted");
}
else
{
    echo ("The record not deleted".mysqli_error($conn));
}

mysqli_close($conn);
?>