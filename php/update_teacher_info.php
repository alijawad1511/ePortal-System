<?php
include 'connection.php';

if(isset($_POST['submit'])){
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNumber = $_POST['mobileNumber'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $subject = $_POST['Subject'];

    


    $query = "UPDATE Teachers SET first_name = '$firstName', last_name = '$lastName', mobile_number = '$mobileNumber', address = '$address', qualification = '$qualification', subject = '$subject' WHERE cnic = '$cnic'";
    $teacherUpdationStatus = mysqli_query($connection,$query);

    if($teacherUpdationStatus==true){
        echo "<script>confirm('Do you want to update Teacher Info?')</script>";
        header("Location: http://localhost/ePortal-System/php/manage_teachers.php",true,301);
    }else{
        echo "<script>alert('Error! Student Info not edited.')</script>";
    }
}



?>