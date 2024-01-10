<?php

require_once('../mysql/mysqlconnect.php');


$username=$_POST["username"];
$password=$_POST["password"];


if(empty($username))
{
    echo "Username is empty";
}
else
{
    echo "The username is ".$username."<br/>";
}


if(empty($password))
{
    echo "password is empty";
}
else
{
    echo "The Password is ".$password."<br/>";
}


?>