<?php
require_once('./mysqlconnect.php');

$sql='CREATE DATABASE Testing';

if(mysqli_query($conn,$sql))
{
    echo ("The db is succesffuly created");
}
else{
    echo ("The db is not connected".mysqli_error($conn));
}

mysqli_close($conn);

?>