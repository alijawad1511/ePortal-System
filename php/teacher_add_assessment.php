<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Assessment</title>


    <?php include 'links.php'; ?>
    <script src="../js/student_registration.js"></script>
    <script src="../js/sidebar_showhide.js"></script>
    <script src="../js/logout_dropdown.js"></script>

</head>

<body>

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
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="admin_dashboard.php">
                        <i class="fas fa-tachometer-alt ml-1 mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="manage_teachers.php">
                        <i class="fas fa-chalkboard-teacher ml-1 mr-2"></i>
                        Teachers
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3 active">
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
            <nav class="navbar mb-2 navbar-light bg-light mb-2">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebar-toggle" onclick="hideSidebar()" class="btn btn-info navbar-btn mr-auto">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- <span class="ml-auto mr-2 font-weight-bold" style="font-size: 20px;">Jawad Shah</span> -->
                    <a class="text-decoration-none">
                        <img src="../assets/user-profile.jpg" id="user-profile" onclick="showDropdown()" width="40" height="40" class="rounded-circle ml-auto" alt="">
                        <div class="card p-2 bg-white shadow" id="dropdown">
                            <div class="useinfo p-2 mb-2 d-flex">
                                <div>
                                    <img src="../assets/user-icon.png" class="rounded-circle mr-3" width="50" height="50">
                                </div>
                                <div>
                                    <div class="text-primary font-weight-bold" id="username" style="font-size: 18px;">Syed Ali Jawad
                                    </div>
                                    <div class="text-dark font-weight-bold" id="user-id" style="font-size: 14px;">Admin</div>
                                </div>
                            </div>
                            <a href="#" class="nav-link text-dark font-weight-bold"><i class="fa fa-key pr-2"></i> Change
                                Password</a>
                            <hr class="my-1 color-light">
                            <a href="#" class="nav-link text-dark font-weight-bold"><i class="fas fa-sign-out-alt pr-3"></i>Log
                                Out</a>
                        </div>
                    </a>
                </div>
            </nav>

            <div class="card bg-white mb-2 p-4 rounded-0" id="content-wrapper">
                <h2 class="main-heading text-secondary"><b>Add Student Assessment</b></h2>
                <hr class="divider py-2">

                <!-- Form Start -->
                <form action="add_assessment.php" method="POST">

                    <div class="px-5 py-3 mb-5 border" id="assessment-input">

                        <h5 class="text-primary mb-3"><b>Assessment Marks</b></h5>

                        <div class="form-group">
                            <label for="studentId">Student ID</label>
                            <input class="form-control" required type="number" name="studentId" id="studentMobileNo">
                            <span class="text-danger font-weight-bold" id="studentIdError"></span>
                        </div>

                        <div class="form-group">
                            <label for="assessmentName">Assessment Name</label>
                            <input class="form-control" required type="text" name="assessmentName" id="assessmentName" placeholder="e.g. Monthly Test # 1">
                            <span class="text-danger font-weight-bold" id="assessmentNameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="subjectName">Subject Name</label>
                            <input class="form-control" required type="text" name="subjectName" id="subjectName"  placeholder="e.g. English">
                            <span class="text-danger font-weight-bold" id="subjectName"></span>
                        </div>
                        
                        <div class="clearfix name-container">

                            <div class="form-group float-left">
                                <label for="totalMarks">Total Marks</label>
                                <input type="number" name="totalMarks" required id="totalMarks" class="form-control mr-5" placeholder="e.g. 60">
                                <span class="text-danger font-weight-bold" id="totalMarksError"></span>
                            </div>

                            <div class="form-group float-right">
                                <label for="obtainedMarks">Obtain Marks</label>
                                <input type="number" name="obtainedMarks" required id="obtainedMarks" class="form-control" placeholder="e.g. 59">
                                <span class="text-danger font-weight-bold" id="obtainedMarksError"></span>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary w-100" name='submit'>Add Assessment</button>

                </form>


            </div>

            <div class="card p-4 bg-white" id="footer">
                Developed by : <b>Syed Ali Jawad Bukhari</b>
            </div>



        </div>
        <!-- Content End -->


    </div>
    <!-- Wrapper End     -->

</body>

</html>