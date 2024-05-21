<?php
// error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password = 'password';
$database = 'studentsmanagement';
$port = 3307;

$connection = new mysqli($servername,$username,$password,$database,$port);

if($connection->connect_error){
    die('connection failed :'.$connection->connect_error);
}
// echo 'connection successfully';
?>