<?php

require_once('./mysqlconnect.php');


$sql='INSERT INTO employee(emp_name,emp_salary)values("test",1000)';

$result=mysqli_query($conn,$sql);


if($result)
{
    echo ("The successfully inserted");
}
else
{
echo("The values not inserted".mysqli_error($conn));
}

mysqli_close($conn);


?>

