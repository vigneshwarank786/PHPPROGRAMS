<?php

require_once('./db.php');

$id=$_GET['id'];

$sql="DELETE FROM it where emp_id='$id' ";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");
?>