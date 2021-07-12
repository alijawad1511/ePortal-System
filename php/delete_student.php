<?php
include 'DBManager.php';

$studentId = $_GET['id'];

echo '<script>confirm("Do you really want to delete student?")</script>';

$query = "UPDATE Students SET account_status = 0 WHERE student_id = $studentId";
$result = mysqli_query($connection,$query);

if($result){
    echo '<script>confirm("Student deleted successfully")</script>';
    ?><script>location.replace("manage_students.php")</script><?php
}




?>