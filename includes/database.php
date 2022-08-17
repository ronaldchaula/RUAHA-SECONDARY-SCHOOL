<?php

//$server = 'localhost';
//$database = "ruahaschool";
//$username = "admin";
//$password = "sK0AS5BEbGLBmvH0";
//
//$connection = mysqli_connect($server, $username, $password,  $database);

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if(mysqli_connect_error()){
echo mysqli_connect_error();
exit;
}

