<?php

$serverName = 'localhost';
$username = 'root';
$passwrod = '';
$dbName = 'eportal';

$coonection = mysqli_connect($serverName,$username,$passwrod,$dbName);

if(!$coonection){
    echo '<script>alert("Connection to Database failed!")</script>';
}else{
    echo '<script>alert("Connection to Database successful!")</script>';
}
?>