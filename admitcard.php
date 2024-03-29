<?php

session_start();
error_reporting(0);

$con = mysqli_connect("localhost", "root", "", "oas");
$q = mysqli_query($con, "select s_name from t_user_data where s_id='" . $_SESSION['user'] . "'");
$n =  mysqli_fetch_assoc($q);
$stname = $n['s_name'];
$id = $_SESSION['user'];

$result = mysqli_query($con, "SELECT * FROM t_user WHERE s_id='" . $_SESSION['user'] . "'");

while ($row = mysqli_fetch_array($result)) {
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css">


        <script type="text/javascript">
            function printpage() {
                var printButton = document.getElementById("print");
                printButton.style.visibility = 'hidden';
                window.print()
                printButton.style.visibility = 'visible';
            }
        </script>
    </head>

    <body style="background-image:url(./images/inbg.jpg) ">



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
               <p>
                    <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="smoothScroll">Home</a></li>
                        <!-- <li><a href="#news" class="smoothScroll">Admission Details</a></li> -->
                        <!-- <li><a href="signup.php" class="smoothScroll">Register</a></li> -->
                        <li><a href="login.php" class="smoothScroll">Login</a></li>
                        <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                        <li><a href="#about" class="smoothScroll">About Us</a></li>
                        <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>



     

        <form id="admincard" action="admincard.php" method="post">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                            <table class="table table-bordered" style="font-family: Verdana">

                                <tr>
                                    <td style="width:3%;"><img src="./images/logo.png" width="50%"> </td>
                                    <td style="width:8%;">
                                        <center>
                                            <font style="font-family:Arial Black; font-size:20px;">
                                                Bangladesh Army University of Engineering and Technology</font>
                                        </center>

                                        <center>
                                            <font style="font-family:Verdana; font-size:18px;">
                                                Phone : 88012345678, Fax : 88012345678
                                            </font>
                                        </center>

                                        <br>
                                        <br>
                                        <center>
                                            <font style="font-family:Arial Black; font-size:20px;">
                                                Admit Card (2022-23)</font>
                                        </center>
                                    </td>
                                    <td colspan="2" width="3%">
                                        <?php

                                        $picfile_path = 'studentpic/';

                                        $result1 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $_SESSION['user'] . "'");



                                        while ($row1 = mysqli_fetch_array($result1)) {
                                            $picsrc = $picfile_path . $row1['s_pic'];

                                            echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                                            echo "<div>";
                                        }
                                        ?>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <font style="font-family: Verdana;">Registration No. </font>
                                    </td>
                                    <td colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            <?php echo $id ?></font>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">Date</font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            10th dec 2022</font>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">Time </font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            12:00 AM - 1:00 PM </font>
                                    </td>
                                </tr>

                                

                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">Name </font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            <?php echo $stname; ?></font>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">University Name & Address </font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold"> Bangladesh Army Universty of Engineering and 
                                            Technology <br><br>
                                            BAUET,Qadirabad,Dayarampur,Natore<br>
                                            +88012345678, +88012345678<br>
                                        </font>
                                    </td>
                                </tr>
                                <?php
                                   }
                                ?>

                            </table>
                    </div>
                </div>
            </div>

            <center>
                <font style="font-family: Verdana; font-weight: bold; font-size: 20px;"> Instructions to the Candidate</font>
            </center><br>
            <font style="font-family: Verdana;  font-size: 13px;">
                <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                    1. This Registeration Card must be presented for verification at the time of submission of registration form, along with at 
                    least two original photograp and valid photo identification card.(e.g : NID Card / HSC or SSC Certificate).
                </p>

                <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                    2. This Registeration Card is valid only if the candidate's photograph and signature images are <b> legibly printed</b>.
                    Print this on an A4 sized paper using a laser printer preferably a color photo printer.
                </p>

                <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                    3. Registration card must be attach front of registration form.
                </p>

                <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                    4. Candidates will not be allowed to enter the university premises without registration card.
                </p>

                <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                    5. Without registration card the form will not be acceptable in admission section.
                </p>

                <center><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
       </form>
   </body>
</html>