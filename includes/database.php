<?php

$server = 'localhost';
$database = "ruahaschool";
$username = "admin";
$password = "sK0AS5BEbGLBmvH0";

$connection = mysqli_connect($server, $username, $password,  $database);

if(mysqli_connect_error()){
echo mysqli_connect_error();
exit;
}
