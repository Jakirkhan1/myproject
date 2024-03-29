<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "oas");
if (!isset($con)) {
     die("Database Not Found");
}


if (isset($_REQUEST["u_sub"])) {

     $id = $_POST['u_id'];
     $pwd = $_POST['u_ps'];
     if ($id != '' && $pwd != '') {
          $query = mysqli_query($con, "select * from t_user_data where s_id='" . $id . "' and s_pwd='" . $pwd . "'");
          $res = mysqli_fetch_row($query);
          $query1 = mysqli_query($con, "select * from t_user where s_id='" . $id . "'");
          $res1 = mysqli_fetch_row($query1);

          if ($res) {
               $_SESSION['user'] = $id;
               header('location:admsnform.php');
          } else {

               echo '<script>';
               echo 'alert("Invalid username or password")';
               echo '</script>';
          }

          if ($res1) {
               $_SESSION['user'] = $id;
               header('location:homepageuser.php');
          } else {

               echo '<script>';
               echo 'alert("Invalid username or password")';
               echo '</script>';
          }
     } else {
          echo '<script>';
          echo 'alert("Enter both username and password")';
          echo '</script>';
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link type="text/css" rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
     <script src="bootstrap/jquery.min.js"></script>
     <script src="bootstrap/bootstrap.min.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
</head>

<body>
    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <img src="images/logo2.png" alt="" width="350" height="75">
            </div>
              
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="smoothScroll">Home</a></li>
                    <li><a href="signup.php" class="smoothScroll">Register</a></li>
                    <li><a href="login.php" class="smoothScroll">Login</a></li>
                    <li><a href="form.php" class="smoothScroll">Form Fill Up</a></li>
                    <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                </ul>
            </div>

        </div>
    </section>

    <section id="Sign_in">
        <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                              <p>
                                   <h2>Login</h2>
                              </p>
                         </div>
                    </div>
               </div>
        </div>

        <div class="container">
               <div class="row">
                    <!-- Sign in -->
                    <form id="index" action="" method="post">

                        <div class="container-fluid">
                            <div class="row">
                                   <div class="col-sm-12">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">

                                        </div>
                                   </div>
                            </div>

                            <div id="dmain" style="margin-left:600px; margin-top:30px;">
                                   <br>
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <h4 style="width:300px; margin-left: 66px;">User ID</h4>
                                        <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 66px;" 
                                         placeholder="Enter Your User ID"><br>
                                        <h4 style="width:300px; margin-left: 66px;">Password</h4>
                                        <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left:66px;" 
                                         placeholder="Enter Your Password"><br>
                                        <input type="submit" id="u_sub" name="u_sub" value="Sign in" class="toggle btn btn-primary" 
                                         style="width:100px; margin-left: 160px;"><br><br>
                                        <a href="signup.php" style="margin-left: 180px; color:#000000;"><b>Don't Have An Account !!</b></a>
                                   </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
    </section>    


    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>