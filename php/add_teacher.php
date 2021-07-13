<?php
include 'connection.php';

if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $gender = $_POST['gender'];
    $mobileNumber = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $qualification = $_POST['qualification'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encryptedPass = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO Teachers(first_name,last_name,mobile_number,cnic,address,gender,qualification,subject,email,password) VALUES('$firstName','$lastName','$mobileNumber','$address','$cnic','$gender','$qualification','$subject','$email','$encryptedPass')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {

        echo '<script>confirm("Student deleted successfully")</script>';
        ?><script>location.replace("manage_students.php")</script><?php
        
    } else {
        echo "<script>alert('Error! Teacher already exists')</script>";
        ?><script>location.replace("manage_students.php")</script><?php
    }
}

?>