<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher Info</title>

    <?php include 'links.php'; ?>
    <script src="../js/teacher_registration.js"></script>

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
                <li><a class="nav-link text-white font-weight-bold px-3 py-3" href="admin_dashboard.html">
                        <i class="fas fa-tachometer-alt ml-1 mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li><a class="nav-link text-white font-weight-bold px-3 py-3 active">
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

        <?php 
            include 'connection.php';

            $selected_id = $_GET['id'];
            
            $query = "SELECT * FROM Teachers where teacher_id = '$selected_id'";
            $result = mysqli_query($connection,$query);
            $noOfRows = mysqli_num_rows($result);
            
            if($noOfRows>0){

                $teacher = mysqli_fetch_array($result);
        
        ?>

            <div class="card bg-white mb-2 p-4 rounded-0" id="content-wrapper">
                <h2 class="main-heading text-secondary"><b>Edit Teacher Info</b></h2>
                <hr class="divider py-2">

                <!-- Form Start -->
                <form action="php/add_teacher.php" method="POST" onsubmit="return validateTeacherRegistration()">

                    <div class="px-5 py-3 mb-5 border" id="personal-info">

                        <h5 class="text-primary mb-3"><b>Personal Information</b></h5>

                        <div class="clearfix name-container">
                            <div class="form-group float-left">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" required id="firstName"
                                    class="form-control mr-5" value="<?php echo $teacher['first_name']?>">
                                <span class="text-danger font-weight-bold" id="firstNameError"></span>
                            </div>
                            <div class="form-group float-right">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" required id="lastName"
                                    class="form-control" value="<?php echo $teacher['last_name']?>">
                                <span class="text-danger font-weight-bold" id="lastNameError"></span>
                            </div>
                        </div>
                        <?php 
                        // Fetching Class Name and Section of Teacher
                            $query = "SELECT class_name,section FROM Classes WHERE incharge_id = '$selected_id'";
                            $result = mysqli_query($connection,$query);
                            $classData = mysqli_fetch_array($result);
                        ?>

                        <div class="clearfix class-container">
                            <div class="form-group float-left">
                                <label for="class">Incharge of Class</label>
                                <select class="form-control" name="class" id="class" required>
                                    <option value="">--Select Your Class--</option>
                                    <option value="Nursery"
                                    <?php
                                        if($classData['class_name']=="Nursery"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Nursery</option>
                                    <option value="Prep"
                                    <?php
                                        if($classData['class_name']=="Prep"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Prep</option>
                                    <option value="One"
                                    <?php
                                        if($classData['class_name']=="One"){
                                            echo "selected";
                                        }
                                    ?>
                                    >One</option>
                                    <option value="Two"
                                    <?php
                                        if($classData['class_name']=="Two"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Two</option>
                                    <option value="Three"
                                    <?php
                                        if($classData['class_name']=="Three"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Three</option>
                                    <option value="Four"
                                    <?php
                                        if($classData['class_name']=="Four"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Four</option>
                                    <option value="Five"
                                    <?php
                                        if($classData['class_name']=="Five"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Five</option>
                                    <option value="Six"
                                    <?php
                                        if($classData['class_name']=="Six"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Six</option>
                                    <option value="Seven"
                                    <?php
                                        if($classData['class_name']=="Seven"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Seven</option>
                                    <option value="Eight"
                                    <?php
                                        if($classData['class_name']=="Eight"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Eight</option>
                                    <option value="Nine"
                                    <?php
                                        if($classData['class_name']=="Nine"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Nine</option>
                                    <option value="Ten"
                                    <?php
                                        if($classData['class_name']=="Ten"){
                                            echo "selected";
                                        }
                                    ?>
                                    >Ten</option>
                                </select>
                                <span class="text-danger font-weight-bold" id="classError"></span>
                            </div>
                            <div class="form-group float-right">
                                <label for="section">Section</label>
                                <select class="form-control" name="section" id="section" required>
                                    <option value="">--Select Class--</option>
                                    <option value="A"
                                    <?php
                                        if($classData['section']=="A"){
                                            echo "selected";
                                        }
                                    ?>
                                    >A</option>
                                    <option value="B"
                                    <?php
                                        if($classData['section']=="B"){
                                            echo "selected";
                                        }
                                    ?>
                                    >B</option>
                                </select>
                                <span class="text-danger font-weight-bold" id="sectionError"></span>
                            </div>
                        </div>

                        <div class="form-group my-2">
                            <label for="gender" class="mr-5">Gender</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="maleOption" value="m" <?php 
                                    if($teacher['gender'] == "Male"){
                                        echo 'checked';
                                    }?>
                                    >
                                <label class="form-check-label font-weight-normal" for="maleOption">
                                    Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="femaleOption" value="f"<?php 
                                    if($teacher['gender'] == "Female"){
                                        echo 'checked';
                                    }
                                ?>>
                                <label class="form-check-label font-weight-normal" for="femaleOption">
                                    Female
                                </label>
                            </div>
                            <span id="genderError"></span>
                        </div>

                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number</label>
                            <input class="form-control" required type="number" name="mobileNumber"
                                id="mobileNumber" placeholder="e.g. 03XX-XXXXXXX"  value="<?php echo $teacher['mobile_number']?>">
                            <span class="text-danger font-weight-bold" id="mobileNumberError"></span>
                        </div>

                        <div class="form-group">
                            <label for="cnic">CNIC (National Identity Card)</label>
                            <input class="form-control" required type="text" name="cnic" id="cnic"
                                placeholder="e.g. XXXXXXXXXXXXX" value="<?php echo $teacher['cnic']?>" readonly>
                            <span class="text-danger font-weight-bold" id="cnicError"></span>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" required name="address" id="address"
                                rows="3"><?php echo $teacher['address']?></textarea>
                        </div>

                    </div>

                    <div class="px-5 py-3 mb-5 border" id="parent-info">

                        <h5 class="text-primary mb-3"><b>Academic Information</b></h5>

                        <div class="clearfix name-container">
                            <div class="form-group float-left">
                                <label for="qualification">Qualification</label>
                                <input type="text" name="qualification" required id="qualification"
                                    class="form-control mr-5" value="<?php echo $teacher['qualification']?>">
                                <span class="text-danger font-weight-bold" id="qualificationError"></span>
                            </div>
                            <div class="form-group float-right">
                                <label for="Subject">Subject</label>
                                <input type="text" name="Subject" required id="Subject"
                                    class="form-control" value="<?php echo $teacher['subject']?>">
                                <span class="text-danger font-weight-bold" id="SubjectError"></span>
                            </div>
                        </div>


                    </div>

                    <div class="px-5 py-3 mb-3 border" id="account-info">
                        <h5 class="text-primary mb-3"><b>Account Information</b></h5>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" required type="email" name="email" id="email"
                                placeholder="yourname@gmail.com"  value="<?php echo $teacher['email']?>" readonly>
                            <span class="text-danger font-weight-bold" id="emailError"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" required type="password" name="password" id="password" value="<?php echo $teacher['password']?>">
                            <span class="text-danger font-weight-bold" id="passwordError"></span>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input class="form-control" required type="password" name="confirmPassword"
                                id="confirmPassword" value="<?php echo $teacher['password']?>">
                            <span class="text-danger font-weight-bold" id="confirmPasswordError"></span>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary w-100" name="submit">Save Changes</button>

                </form>


            </div>
        
        <?php
            } // if closing   
        ?>
            <div class="card p-4 bg-white" id="footer">
                Developed by : <b>Syed Ali Jawad Bukhari</b>
            </div>



        </div>
        <!-- Content End -->


    </div>
    <!-- Wrapper End     -->

</body>

</html>