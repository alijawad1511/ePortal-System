<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Teachers</title>

    <?php include 'links.php'; ?>
    <script src="../js/student_registration.js"></script>

</head>

<body>

    <?php include 'DBManager.php' ?>
    
    
    
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
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="admin_dashboard.html">
                        <i class="fas fa-tachometer-alt ml-1 mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3 active" href="">
                        <i class="fas fa-chalkboard-teacher ml-1 mr-2"></i>
                        Teachers
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="manage_students.html">
                        <i class="fas fa-user-graduate ml-1 mr-2"></i>
                        Students
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="manage_parents.php">
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
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fa fa-money-check-alt ml-1 mr-2"></i>
                        Payments
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-users ml-1 mr-2"></i>
                        Admins
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-copy ml-1 mr-2"></i>
                        Accounts
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div id="content" class="overflow-auto">

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">

                <button class="btn" id="sidebar-toggler" onclick="hideSidebar()"><span
                        class="navbar-toggler-icon"></span></button>

                <!-- <span class="p-2 ml-4" style="font-size: 18px;"><b>News</b></span> -->
                <!-- <div class="border p-1 pt-2 ml-2 d-md-block d-none col-lg-8 col-md-8 " id="topbar-news">
                    <marquee class="txt" direction="left" onmouseover="stop" onmouseout="start">This is an ePortal
                        System created by our Group for Web Technologies.</marquee>
                </div> -->

                <div class="ml-auto">
                    <span class="font-weight-bold mr-1" style="font-size: 18px;">Admin</span>
                    <img src="../assets/user-profile.jpg" id="user-profile" width="40" height="40" class="rounded-circle"
                        alt="">
                    <div class="card p-2 bg-white shadow" id="dropdown">
                        <div class="useinfo p-2 mb-2 d-flex">
                            <div>
                                <img src="img/user-icon.png" class="rounded-circle mr-3" width="50" height="50">
                            </div>
                            <div>
                                <div class="font-weight-bold" id="username" style="font-size: 18px;">Syed Ali Jawad
                                </div>
                                <div class="" id="user-id" style="font-size: 14px;">F2019266282</div>
                            </div>
                        </div>
                        <a href="#" class="nav-link text-dark font-weight-bold"><i class="fa fa-key pr-2"></i> Change
                            Password</a>
                        <hr class="my-1 color-light">
                        <a href="#" class="nav-link text-dark font-weight-bold"><i
                                class="fas fa-sign-out-alt pr-3"></i>Log
                            Out</a>
                    </div>
                </div>


            </nav>

            <div class="card bg-white mb-2 p-4 rounded-0" id="content-wrapper">
                <h2 class="main-heading text-secondary"><b>Teachers</b></h2>
                <hr class="divider py-2">

                <div class="clearfix class-container p-3 border mb-3">
                    <a href="../templates/teacher_registration.html" class="btn btn-success float-left"><i
                            class="fas fa-user-plus mr-1"></i>Add Teacher</a>
                    <form action="#" method="GET" class="form-inline ml-auto float-right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Here..."
                            aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" onclick="validateSearch()" type="submit"
                            name="search">Search</button>
                    </form>
                </div>


                <div class="card table-container overflow-auto bg-light border">
                    <table class="table table-responsive-lg table-responsive-md table-responsive-sm table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Qualification</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * from teachers";
                                $result = mysqli_query($connection,$query);
                                $noOfRows = mysqli_num_rows($result);


                                if($noOfRows>0){

                                    while($teacher = mysqli_fetch_array($result)){  ?>
                                        <tr>
                                        <td><?php echo $teacher['teacher_id']; ?></td>
                                        <td><?php echo $teacher['first_name']." ".$teacher['last_name']; ?></td>
                                        <td><?php echo $teacher['email']; ?></td>
                                        <td><?php echo $teacher['mobile_number']; ?></td>
                                        <td><?php echo $teacher['subject']; ?></td>
                                        <td><?php echo $teacher['qualification']; ?></td>
                                        <td class="text-center"><a href="#" class="text-decoration-none"><i style="color: green;" class="fas fa-eye"></i></a></td>
                                        <td class="text-center"><a href="edit_teacher.php?id=<?php echo $teacher['teacher_id']; ?>" class="text-decoration-none"><i style="color: rgb(34, 119, 230);" class="far fa-edit"></i></a></td>
                                        <td class="text-center"><a href="#" class="text-decoration-none"><i style="color: red;" class="fas fa-trash"></i></a></td>
                                        </tr>
                                   
                                 <?php

                                    } // while Loop closing
                                }  // If closing

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