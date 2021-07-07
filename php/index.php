<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>ePortal System</title>

    <?php include 'links.php'; ?>
    <script src="js/loginValidation.js"></script>

</head>

<body>
    <div class="container-fluid bg-light">

        <div id="logo-container" class="row d-flex justify-content-center p-3">
            <img src="assets/logo/logo.png" alt="" width="250" height="210">
        </div>
        <div id="form-container" class="col-lg-6 col-md-10 col-12 p-lg-3 p-md-4 p-2 mx-auto">
            <h2 class="text-center mb-5">Welcome to School</h2>
            <div class="alert alert-danger d-none" role="alert">
                This is a danger alert—check it out!
            </div>


            <!-- Form -->
            <form action="php/login.php" method="POST" class="login-form" id="form">

                <div class="form-group">
                    <label class="font-weight-bold">Email</label>
                    <input type="text" name="email" required id="email" class="form-control">
                    <span class="text-danger" id="emailError"></span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Password</label>
                    <input type="password" name="password" required id="password" class="form-control"><i class="fas fa-eye-slash" id="eye-icon" onclick="hideshow()" style="color: rgb(151, 154, 156); font-size: 20px; position: relative; top: -30px; left: 555px;"></i>
                    <!-- <i class="fas fa-eye-slash"></i> -->
                    <span class="text-danger" id="passwordError"></span>
                    <a href="#" class="text-danger float-right font-weight-bold">Forgot password?</a>
                </div>

                <button type="submit" name="submit" class="btn btn-primary w-100 mt-5 mb-2">Login</button>

            </form>
            
        </div>

    </div>

    <script>

        // Function to Show/Hide Password
        var show = false;

        function hideshow(){
            
            if(show==false){
                document.getElementById('eye-icon').classList.replace("fa-eye-slash","fa-eye");
                document.getElementById('password').type = "text";
                show = true;
            }else{
                document.getElementById('eye-icon').classList.replace("fa-eye","fa-eye-slash");
                document.getElementById('password').type = "password";
                show = false;
            }

        }

    </script>

</body>

</html>