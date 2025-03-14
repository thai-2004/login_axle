<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$database = "quanlythanhvien";

$conn = new mysqli($host, $username, $password, $database); 

if(!$conn){
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
