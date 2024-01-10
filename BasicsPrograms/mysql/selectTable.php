<?php
require_once("./mysqlconnect.php");

$sql='SELECT * FROM employee';

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    while($row = $result->fetch_assoc()) 
     {
        echo "Emloyee ID : ".$row['emp_id']."<br/>"."Employee Name: ".$row['emp_name']."<br/>"."Employee Salary: ".$row['emp_salary'];
    }
}
else{
    echo ("0 results");
}

mysqli_close($conn);

?>