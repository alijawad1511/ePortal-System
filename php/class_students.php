<?php
session_start();

if(!isset($_SESSION['currentUserId'])){

    ?><script>
        alert("You are logged out. Please login again");
        location.replace("../index.php");
    </script><?php   
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Manage Students</title>
    <?php include 'links.php'; ?>
    
    <script src="../js/logout_dropdown.js"></script>
    <script src="../js/sidebar_showhide.js"></script>
    <script src="../js/tableSearch.js"></script>
    <script src="../js/student_registration.js"></script>

</head>

<body>

<?php 
        session_start();
        include 'DBManager.php';

        $teacherID = $_SESSION['currentUserId'];

        $query = "SELECT * from Teachers WHERE teacher_id = $teacherID";
        $result = mysqli_query($connection,$query);
        $teacherInfo = mysqli_fetch_array($result);

    ?>
    
    
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Sidebar Start -->
        <nav id="sidebar">

            <!-- User -->
            <a href="#" id="logo-container">
                <img class="mt-3 ml-4" src="../assets/logo/logo1.png" alt="Logo" width="180">
            </a>
            <hr class="my-3 sidebar-separator" style="background-color: rgba(255, 255, 255, 0.562);">

            <!-- Navigation -->
            <ul>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="teacher_dashboard.php">
                        <i class="fas fa-tachometer-alt ml-1 mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="teacher_info.php">
                        <i class="fas fa-chalkboard-teacher ml-1 mr-2"></i>
                        Personal Info
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3 active">
                        <i class="fas fa-user-graduate ml-1 mr-2"></i>
                        Students
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="parents_info.php">
                        <i class="fa fa-group ml-1 mr-2"></i>
                        Parents
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-book ml-1 mr-2"></i>
                        Subjects
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-award ml-1 mr-2"></i>
                        Assessments
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fa fa-chart-bar ml-1 mr-2"></i>
                        Results
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div id="content" class="overflow-auto">

            <!-- Top Navbar -->
            <nav class="navbar mb-2 navbar-light bg-light mb-2">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebar-toggle" onclick="hideSidebar()"
                            class="btn btn-info navbar-btn mr-auto">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- <span class="ml-auto mr-2 font-weight-bold" style="font-size: 20px;">Jawad Shah</span> -->
                    <a class="text-decoration-none">
                        <img src="../assets/user-profile.jpg" id="user-profile" onclick="showDropdown()" width="40"
                            height="40" class="rounded-circle ml-auto" alt="">
                        <div class="card p-2 bg-white shadow" id="dropdown">
                            <div class="useinfo p-2 mb-2 d-flex">
                                <div>
                                    <img src="../assets/user-icon.png" class="rounded-circle mr-3" width="50"
                                        height="50">
                                </div>
                                <div>
                                    <div class="text-primary font-weight-bold" id="username" style="font-size: 18px;">
                                        <?php echo $teacherInfo['first_name']." ".$teacherInfo['last_name']; ?> </div>
                                    <div class="text-muted font-weight-bold" id="user-id" style="font-size: 14px;">
                                        Teacher</div>
                                </div>
                            </div>
                            <a href="#" onclick="changePassword()" class="nav-link text-dark font-weight-bold"
                                data-target="#changePasswordWindow" data-toggle="modal"><i class="fa fa-key pr-2"></i>
                                Change Password</a>

                            <hr class="my-1 color-light">
                            <a href="#" class="nav-link text-dark font-weight-bold"><i
                                    class="fas fa-sign-out-alt pr-3"></i>Log
                                Out</a>
                        </div>
                    </a>
                </div>
            </nav>

            <div class="card bg-white mb-2 p-4 rounded-0" id="content-wrapper">
                <h2 class="main-heading text-secondary"><b>Students</b></h2>
                <hr class="divider py-2">

                <div class="clearfix class-container p-3 border mb-3">

                    <form action="#" method="GET" class="form-inline ml-auto float-right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search name here..."
                            aria-label="Search" onkeyup="myFunction()" id="search-keyword">
                        <button class="btn btn-outline-primary my-2 my-sm-0" onclick="validateSearch()" type="submit"
                            name="search">Search</button>
                    </form>

                </div>


                <div class="card table-container overflow-auto bg-light border">
                    <table class="table table-responsive-lg table-responsive-md table-responsive-sm table-hover" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Parent Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT student_id,first_name,last_name,class_name,email,mobile_number,parent_id from Students where class_name = (select class_name from classes where incharge_id = $teacherID)";
                            $result = mysqli_query($connection,$query);
                            $noOfRows = mysqli_num_rows($result);


                            if($noOfRows>0){

                                while($student = mysqli_fetch_array($result)){
                                    $parentId = $student['parent_id'];
                                    $query = "select first_name,last_name from Parents where parent_id = $parentId";
                                    $parentResult = mysqli_query($connection,$query);
                                    $parentName = mysqli_fetch_array($parentResult);
                                    
                                    ?>
                                    <tr>
                                    <td><?php echo $student['student_id']; ?></td>
                                    <td><?php echo $student['first_name']." ".$student['last_name']; ?></td>
                                    <td><?php echo $student['class_name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['mobile_number']; ?></td>
                                    <td><?php echo $parentName['first_name']." ".$parentName['last_name']; ?></td>
                                    </tr>
                               
                             <?php

                                } // while Loop closing
                            }  // If closing
                            else{
                                echo '<script>alert("Sorry! No Student still registered in your Class")</script>';
                            }

                        ?>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="card p-4 bg-white rounded-0" id="footer">
                Developed by : <b>Syed Ali Jawad Bukhari</b>
            </div>



        </div>
        <!-- Content End -->


    </div>
    <!-- Wrapper End     -->

</body>

</html>