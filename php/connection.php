<?php

$serverName = 'localhost';
$username = 'root';
$passwrod = '';
$dbName = 'eportal';

$query = "";

$currentUser; // Data of Current User who is logged In

$connection = mysqli_connect($serverName,$username,$passwrod,$dbName);

if(!$connection){
    echo '<script>alert("Connection to Database failed!")</script>';
}else{
    // echo '<script>alert("Connection to Database successful!")</script>';
    // createTables();
}

function createTables(){
    global $connection, $query;

    $query = "CREATE TABLE IF NOT EXISTS Parents(parent_id int auto_increment primary key, first_name varchar(20), last_name varchar(20), mobile_number varchar(11),cnic varchar(13),email varchar(30) unique, address varchar(100), occupation varchar(30), designation varchar(30))";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS Teachers(teacher_id int auto_increment primary key, first_name varchar(20), last_name varchar(20), mobile_number varchar(11),cnic varchar(13),address varchar(100), gender varchar(10), qualification varchar(30), subject varchar(20),joining_date date DEFAULT CURRENT_TIMESTAMP, email varchar(30) unique, password varchar(50),account_status boolean)";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS Classes(class_name varchar(20) primary key, section char(1),incharge_id int, foreign key(incharge_id) references teachers(teacher_id))";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS Students(student_id int auto_increment, first_name varchar(20), last_name varchar(20),class_name varchar(20), mobile_number varchar(11),cnic varchar(13),address varchar(100), gender varchar(10),blood_group char(3),email varchar(30) unique,password varchar(50),parent_id int,account_status boolean, primary key(student_id), foreign key(class_name) references classes(class_name), foreign key(parent_id) references Parents(parent_id))";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS Subjects(subject_id int primary key auto_increment, subject_title varchar(30),subject_type varchar(20),class_name varchar(20),foreign key(class_name) references Classes(class_name))";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS subject_teached(teacher_id int,subject_id int, primary key(teacher_id,subject_id), foreign key(subject_id) references subjects(subject_id), foreign key(teacher_id) references Teachers(teacher_id))";
    mysqli_query($connection,$query);
    
    $query = "CREATE TABLE IF NOT EXISTS subjects_registered(subject_id int, student_id int,primary key(subject_id,student_id), foreign key(subject_id) references Subjects(subject_id), foreign key(student_id) references Students(student_id))";
    mysqli_query($connection,$query);

    $query = "CREATE TABLE IF NOT EXISTS assessments(assessment_id int primary key AUTO_INCREMENT,student_id int,assessment_name varchar(30),subject_title varchar(30),totla_marks int,obtained_marks int,date date default CURRENT_TIMESTAMP,FOREIGN KEY(student_id) REFERENCES Students(student_id))";
    mysqli_query($connection,$query);

}

?>