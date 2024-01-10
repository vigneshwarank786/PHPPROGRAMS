<?php

require_once('./mysqlconnect.php');

$sql="UPDATE employee set emp_name='test2' where emp_id=2";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo ("The data updated");
}
else
{
    echo ("The Data not updated".mysqli_error($conn));

}

mysqli_close($conn);

?>