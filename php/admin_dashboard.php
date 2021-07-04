<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php include 'links.php' ?>
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
                <li><a class="nav-link text-white font-weight-bold px-3 py-3 active">
                        <i class="fas fa-tachometer-alt ml-1 mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="manage_teachers.php">
                        <i class="fas fa-chalkboard-teacher ml-1 mr-2"></i>
                        Teachers
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="manage_students.php">
                        <i class="fas fa-user-graduate ml-1 mr-2"></i>
                        Students
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fa fa-group ml-1 mr-2"></i>
                        Parents
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-copy ml-1 mr-2"></i>
                        Examination
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fas fa-award ml-1 mr-2"></i>
                        Results
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="#">
                        <i class="fa fa-cog ml-1 mr-2"></i>
                        Settings
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
                    <span class="ml-auto mr-2 font-weight-bold" style="font-size: 20px;">Jawad Shah</span>
                    <a class="text-decoration-none">
                        <img src="../assets/user-profile.jpg" id="user-profile" onclick="showDropdown()" width="40" height="40" class="rounded-circle ml-auto" alt="">
                        <div class="card p-2 bg-white shadow" id="dropdown">
                            <div class="useinfo p-2 mb-2 d-flex">
                                <div>
                                    <img src="img/user-icon.png" class="rounded-circle mr-3" width="50" height="50">
                                </div>
                                <div>
                                    <div class="text-primary font-weight-bold" id="username" style="font-size: 18px;">Syed Ali Jawad
                                    </div>
                                    <div class="text-dark font-weight-bold" id="user-id" style="font-size: 14px;">F2019266282</div>
                                </div>
                            </div>
                            <a href="#" class="nav-link text-dark font-weight-bold"><i class="fa fa-key pr-2"></i> Change
                                Password</a>
                            <hr class="my-1 color-light">
                            <a href="#" class="nav-link text-dark font-weight-bold"><i
                                    class="fas fa-sign-out-alt pr-3"></i>Log
                                Out</a>
                        </div>
                    </a>
                </div>
            </nav>


            <div class="card mb-2 p-4">
                <h2><b>Admin Dashboard</b></h2>
            </div>

            <div class="card bg-white mb-2 p-3 d-flex flex-row flex-wrap justify-content-around" id="content-wrapper">
                <a href="manage_students.php">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-primary">
                        <div class="heading mb-3">Students</div>
                        <div><i class="fas fa-user-graduate"></i></div>
                    </div>
                </a>
                <a href="manage_teachers.php">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-warning">
                        <div class="heading mb-3">Teachers</div>
                        <div><i class="fas fa-chalkboard-teacher"></i></div>
                    </div>
                </a>
                <a href="manage_parents.php">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-secondary">
                        <div class="heading mb-3">Parents</div>
                        <div><i class="fa fa-group"></i></div>
                    </div>
                </a>
                <a href="manage_subjects.php">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-info">
                        <div class="heading mb-3">Subjects</div>
                        <div><i class="fas fa-book"></i></div>
                    </div>
                </a>
                <a href="#">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-success">
                        <div class="heading mb-3">Assessments</div>
                        <div><i class="fas fa-award"></i></div>
                    </div>
                </a>
                <a href="#">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-danger">
                        <div class="heading mb-3">Results</div>
                        <div><i class="fa fa-chart-bar"></i></div>
                    </div>
                </a>
                <a href="#">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-secondary">
                        <div class="heading mb-3">Payments</div>
                        <div><i class="fas fa-money-check-alt"></i></div>
                    </div>
                </a>
                <a href="#">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-primary">
                        <div class="heading mb-3">Admins</div>
                        <div><i class="fas fa-users"></i></div>
                    </div>
                </a>
                <a href="#">
                    <div class="card mb-4 p-3 shadow widget-card d-flex text-center text-info">
                        <div class="heading mb-3">Accounts</div>
                        <div><i class="fas fa-copy"></i></div>
                    </div>
                </a>

            </div>

            <div class="card p-4 bg-white" id="footer">
                Developed by : <b>Syed Ali Jawad Bukhari</b>
            </div>



        </div>
        <!-- Content End -->


    </div>
    <!-- Wrapper End     -->

    <script>


        // Show/Hide Sidebar
        let hideNavbar = false;

        function hideSidebar() {

            if (hideNavbar == false) {
                document.getElementById('sidebar').style.marginLeft = "-250px";
                document.getElementById('content').style.marginLeft = "0";
                hideNavbar = true;
            }
            else {
                document.getElementById('sidebar').style.marginLeft = "0";
                document.getElementById('content').style.marginLeft = "250px";
                hideNavbar = false;
            }

        }


        // Logout Dropdown
        var flag = false;

        function showDropdown(){
            console.log('Hello');
            if(flag==false){
                document.getElementById('dropdown').style.display = "block";
                flag = true;
            }else{
                document.getElementById('dropdown').style.display = "none";
                flag = false;
            }
        }





    </script>

</body>

</html>