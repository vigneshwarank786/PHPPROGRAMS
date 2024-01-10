<?php
require_once('./mysqlconnect.php');


$sql="CREATE TABLE employee(
    emp_id INT AUTO_INCREMENT,emp_name VARCHAR(20) NOT NULL,emp_salary INT NOT NULL,PRIMARY KEY(emp_id)
    )";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo ("The successfully table created");
}
else{
    echo ("".mysqli_error($conn));
}

mysqli_close($conn);

?>