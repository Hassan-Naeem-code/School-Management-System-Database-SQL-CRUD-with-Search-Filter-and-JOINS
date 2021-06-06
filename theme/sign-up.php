<?php 
session_start(); 
@include('connect.php');
if(isset($_SESSION['email'])){
  header('location:index.php');
}
$errors = array();
if(isset($_POST['register_user'])){
  $firstname = mysqli_real_escape_string($db, $_POST['first_Name']);
  $lastname = mysqli_real_escape_string($db, $_POST['last_Name']);
  $email = mysqli_real_escape_string($db, $_POST['email_address']);
  $password = mysqli_real_escape_string($db, $_POST['user_password']);


  if (empty($firstname)) { array_push($errors, "FIrst Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email Address is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  $user_check_query = "SELECT * FROM users WHERE Email='$email'";
  $result = mysqli_query($db, $user_check_query);

  if(mysqli_num_rows($result) > 0){

    array_push($errors, "email already exists");
  }

  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (FirstName,LastName, Email,Password) VALUES('$firstname', '$lastname', '$email','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row">
        <div class="col-12">     
          <div class="login-card">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="https://5.imimg.com/data5/AV/AK/MY-18979886/school-management-software-500x500.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="post" action="">
                  <h4>Create your account</h4>
                  <p>Enter your personal details to create account</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Your Name</label>
                    <div class="form-row">
                      <div class="col-6">
                        <input class="form-control" type="text" placeholder="First name" name="first_Name" />
                      </div>
                      <div class="col-6">
                        <input class="form-control" type="text" required="" placeholder="Last name" name="last_Name" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="email_address" />
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" required="" placeholder="*********" name="user_password" />
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <!-- <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Agree with<a class="ml-2" href="#">Privacy Policy</a></label> -->
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="register_user">Create Account</button>
                  </div>
                  <!-- <h6 class="text-muted mt-4 or">Or signup with</h6> -->
                  <!-- <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div> -->
                  <p class="mt-4 mb-0">Already have an account?<a class="ml-2" href="login.php">Sign in</a></p>
                </form>
                <?php  if (count($errors) > 0) : ?>
                  <div class="error">
                    <?php foreach ($errors as $error) : ?>
                      <p><?php echo $error ?></p>
                    <?php endforeach ?>
                  </div>
                <?php  endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/popper.min.js"></script>
      <script src="../assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>