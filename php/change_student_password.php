<?php
session_start();
include 'DBManager.php';

if(isset($_POST['submit'])){

    $id = $_GET['id'];

    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $query = "SELECT * from Students WHERE student_id = $id";
    $result = mysqli_query($connection,$query);

    if($result){

        $studentInfo = mysqli_fetch_array($result);

        if($oldPassword==$studentInfo['password']){
            
            if($newPassword==$confirmPassword){
                $query = "UPDATE Students SET password = '$newPassword'";
                $result = mysqli_query($connection,$query);
                if($result){
                    header("Location: student_dashboard.php?id=$studentID"); 
                }
            }

        }
    }


}




?>