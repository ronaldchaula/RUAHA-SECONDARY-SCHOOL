<?php

$server = 'localhost';
$database = "ruahaschool";
$username = "admin";
$password = "(WM9Ranu]@gALfmi";

$connection = mysqli_connect($server, $username, $password,  $database);

if(mysqli_connect_error()){
echo mysqli_connect_error();
exit;
}
