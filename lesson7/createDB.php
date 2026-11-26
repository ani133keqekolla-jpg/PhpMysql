<?php
$host="localhost";
$user="root";
$pass="";
try{
    $conn =new PDO("mysql:host=$host",$user,$pass);
    $mysql="create database dddd";
    $conn->exec($mysql);
    echo("database created");
}catch(Exception){
    echo"not connected";
}
?>