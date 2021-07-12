<?php 

$pass = "Rizwan1234@";
$hash = password_hash($pass,PASSWORD_BCRYPT);
echo $hash;

?>