<?php

$database = 'productdb';
$username = 'root';
$password = '';
$hostname = 'localhost';

$con = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$con){
    die("Connection failed : " . mysqli_connect_error());
} else {
    echo "connected";
}