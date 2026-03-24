<?php


$host="localhost";
$username="root";
$password="Arjun@123";
$database="restaurant";

$connection = mysqli_connect($host,$username,$password,$database);
if($connection->connect_errno)
    {
    die("Connection failed: " . $connection->connect_error);

    }
/* else
    {
     echo "Connected successfully";
    }
     */
/* 
