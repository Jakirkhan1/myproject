<?php
session_start();
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "oas");
if (!isset($con)) {
  die("Database Not Found");
}


if (isset($_REQUEST["a_sub"])) {

  $aid = $_POST['a_id'];
  $apwd = $_POST['a_ps'];
  if ($aid != '' && $apwd != '') {
    $query = mysqli_query($con, "select * from t_admin where ad_id='" . $aid . "' and ad_pswd='" . $apwd . "'");
    $res = mysqli_fetch_row($query);
    if ($res) {
      $_SESSION['ad'] = $aid;
      header('location:admin.php');
    } else {
      echo '<script>';
      echo 'alert("Invalid Login ! Please try again.")';
      echo '</script>';
    }
  } else {
    echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
  }
}
?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
  <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
  <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />


  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/tooplate-style.css">

  <title></title>



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
          <!-- <li><a href="#news" class="smoothScroll">Admission Details</a></li>
                         <li><a href="signup.php" class="smoothScroll">Register</a></li> -->
          <li><a href="login.php" class="smoothScroll">Login</a></li>
          <li><a href="form.php" class="smoothScroll">Form Fill Up</a></li>
          <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
          <li><a href="#about" class="smoothScroll">About Us</a></li>
          <li><a href="#google-map" class="smoothScroll">Contact</a></li>
        </ul>
      </div>

    </div>
  </section>




  <form id="adminlogin" action="adminlogin.php" method="post">



    <div id="adivtop">

      <br> <br> <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12" style="text-align:center;display: grid;justify-content: center;">
            <h3>Admin Login</h3>
            <br><br>
            <input type="text" id="a_id" name="a_id" class="form-control" style="width:200px; text-align:center;" placeholder="Admin ID"><br><br>
            <input type="password" id="a_ps" name="a_ps" class="form-control" style="width:200px;text-align:center;" placeholder="Password"><br>
            <br>
            <input type="submit" id="a_sub" name="a_sub" value="Login" class="toggle btn btn-primary"><br>
          </div>


        </div>
      </div>


    </div>


    <input type="hidden" id="txtid" name="txtid"><br />
  </form>



</body>

</html>