<?php
include 'connection.php';

if(isset($_POST['submit'])){
    
    $studentFirstName = $_POST['studentFirstName'];
    $studentLastName = $_POST['studentLastName'];
    $studentClass = $_POST['studentClass'];
    $section = $_POST['section'];
    $studentMobileNo = $_POST['studentMobileNo'];
    $studentAddress = $_POST['studentAddress'];
    $password = $_POST['password'];
    $studentCnic = $_POST['studentCnic'];


    // Parent Data
    $parentFirstName = $_POST['parentFirstName'];
    $parentLastname = $_POST['parentLastname'];
    $parentMobileNo = $_POST['parentMobileNo'];
    $parentAddress = $_POST['parentAddress'];
    $parentCnic = $_POST['parentCnic'];


    $query = "UPDATE Students SET first_name = '$studentFirstName', last_name = '$studentLastName', class_name = '$studentClass', mobile_number = '$studentMobileNo', address = '$studentAddress',password = '$password' WHERE cnic = '$studentCnic'";
    $result = mysqli_query($connection,$query);
    if($result==true){
        echo "<script>alert('Student Info updated successfully!')</script>";
        header("Location: http://localhost/ePortal-System/php/manage_students.php",true,301);
    }else{
        echo "<script>alert('Error! Student Info not edited.')</script>";
    }
}



?>