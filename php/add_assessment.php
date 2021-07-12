<?php
include 'DBManager.php';


if(isset($_POST['submit'])){

    $studentId = (int)$_POST['studentId'];
    $assessmentName = $_POST['assessmentName'];
    $subjectName = $_POST['subjectName'];
    $totalMarks = (float)$_POST['totalMarks'];
    $obtainedMarks = (float)$_POST['obtainedMarks'];

    echo var_dump($studentId);
    echo var_dump($assessmentName);
    echo var_dump($subjectName);
    echo var_dump($totalMarks);
    echo var_dump($obtainedMarks);

    $query = "INSERT INTO Assessments(student_id,assessment_name,subject_title,total_marks,obtained_marks) VALUES((int)$studentId,'$assessmentName','$subjectName',(float)$totalMarks,(float)$obtainedMarks)";
    $result = mysqli_query($connection,$query);
    echo $result;
    if($result){
        echo "<script>alert('Assessment inserted successfully!')</script>";
        header("Location: student_assessments.php");
    }else{
        echo "<script>alert('Error! Assessment not inserted')</script>";
    }

}


?>