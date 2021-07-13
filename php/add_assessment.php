<?php
include 'DBManager.php';


if(isset($_POST['submit'])){

    $studentId = $_POST['studentId'];
    $assessmentName = $_POST['assessmentName'];
    $subjectName = $_POST['subjectName'];
    $totalMarks = $_POST['totalMarks'];
    $obtainedMarks = $_POST['obtainedMarks'];

    echo var_dump($studentId);
    echo var_dump($assessmentName);
    echo var_dump($subjectName);
    echo var_dump($totalMarks);
    echo var_dump($obtainedMarks);

    $query = "INSERT INTO Assessments(student_id,assessment_name,subject_title,total_marks,obtained_marks) VALUES($studentId,'$assessmentName','$subjectName',$totalMarks,$obtainedMarks)";
    $result = mysqli_query($connection,$query);
    if($result){
        echo '<script>confirm("Student Assessment added successfully")</script>';
        ?><script>location.replace("student_assessments.php")</script><?php
    }else{
        echo "<script>alert('Error! Assessment not inserted')</script>";
    }

}


?>