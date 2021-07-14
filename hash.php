<?php 

$pass = "1122";
$hash = password_hash($pass,PASSWORD_BCRYPT);
echo $hash;

?>