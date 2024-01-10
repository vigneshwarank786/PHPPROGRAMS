<?php
require_once('./db.php');

$emp_name=$_POST['emp_name'];
$emp_role=$_POST['emp_role'];
$emp_salary=$_POST['emp_salary'];
$email=$_POST['emailid'];

$sql="INSERT INTO it(emp_name,emp_role,emp_salary,email)values('$emp_name','$emp_role','$emp_salary','$email')";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
header("location: index.php");


?>


