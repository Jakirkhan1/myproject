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

     <title>BAUET</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to BAUET </p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +8801327541001</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 9:00 AM - 2:00 PM (Sun-Thu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">academia.bauet@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


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
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <!--<li><a href="#news" class="smoothScroll">Admission Details</a></li>-->
                         <!-- <li><a href="signup.php" class="smoothScroll">Register</a></li> -->
                         <li><a href="#Sign_in" class="smoothScroll">Login</a></li>
                         <!-- <li><a href="form.php" class="smoothScroll">Form Fill Up</a></li> -->
                         <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Admission 2023</h3>
                                        <h1>BAUET Admission System</h1>
                                        <a href="signup.php" class="section-btn btn btn-default smoothScroll">Register</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Clubs | Health-Care-Centre | Gymnasium | LIBRARY | Cafeteria | Residential-HALL</h3>
                                        <h1> Facilities </h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>A Bouquet Of Knowledge</h3>
                                        <!-- <h1>Library</h1> -->
                                        <a href="login.php" class="section-btn btn btn-default btn-blue smoothScroll">Admission</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>ADMISSION</h2>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container">
               <div class="row">
                    <h3>The Institute Highlights</h3>
                    <br>
                    <p>100% residential facilities for male and female students.</p>
                    <p> Experienced full time faculty members.</p>
                    <p> More than 40 well-equipped modern laboratories.</p>
                    <p> Well-enriched modern library with e-learning facilities.</p>
                    <p> Classrooms with smart boards and multimedia projectors.</p>
                    <p> Politics, eve-teasing, drug and smoking free campus.</p>
                    <p> Medical insurance for all students</p>
                    <p> Up to 40% merit scholarship.</p>
                    <p> Up to 100% tuition fee waiver for deserving candidates.</p>
                    <p> 10% tuition fee waiver for children of Armed Forces personnel.</p>
               </div>
          </div>
          <div class="container">
               <div class="row">
                    <h3>Bachelor of Sciences (B. Sc)</h3>
                    <br>
                    <p>Civil Engineering (CE) <b> intake 50</b></p>
                    <p>Computer Science and Engineering (CSE) <b> intake 50</b></p>
                    <p>Electronics & Telecommunication Engineering (EEE) <b> intake 50</b></p>
                    <p>Information and Communication Engineering (ICE) <b> intake 50</b></p>
                    <p>Mechanical Engineering (ME) <b> intake 20</b></p>
                    <p>English <b> intake 50</b> </p>
                    <p>Business Administration (BBA) <b> intake 60</b></p>
                    <p>Law and Justice <b> intake 50</b> </p>
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
                    <form id="index" action="index.php" method="post">

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
                                        <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your User ID"><br>
                                        <h4 style="width:300px; margin-left: 66px;">Password</h4>
                                        <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your Password"><br>
                                        <input type="submit" id="u_sub" name="u_sub" value="Sign in" class="toggle btn btn-primary" style="width:100px; margin-left: 160px;"><br><br>
                                        <a href="signup.php" style="margin-left: 125px; color:#000000;"><b>Don't Have An Account !!</b></a>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>

     </section>

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                                   <p>
                                   <h2>Our Vision</h2>
                                   </p>
                                   The vision of BAUET is to make it a platform of knowledge of excellence and to make it recognize as an
                                   internationally reputed private University of science, engineering and general education.
                              </h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>
                                   <h2>Our Mission</h2>
                                   </p>
                                   The mission of the University is to foster and provide ‘state of the art’ education in engineering, science and
                                   general education through its modern education system, research and practical implementation of knowledge by
                                   developing human resources, and in turn, enhancing the economic and social well beings of the citizens
                                   nationally and internationally.

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     </br>
     </br>
     </br>


     <!-- GOOGLE MAP -->
     <section id="google-map">
          <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
          -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3636.6245756541994!2d89.00690891506991!3d24.289840084326197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1661864503537!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Our Contact</p>
                              <p>BAUET</p>
                              <p> Qadirabad, Dayarampur</p>
                              <p> Natore - 6431</p>


                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>+8801700000322, +8801701100322</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">academia.bauet@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Sunday - Thursday <span>8:15 AM - 4:15 PM</span></p>

                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2022 Bangladesh Army University of Engineering & Technology. All Rights Reserved.|</p>
                                   <p> Design: Team_Spider</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Library</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
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