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
        </link>

        <script type="text/javascript">
            function printpage() {
                var printButton = document.getElementById("print");
                printButton.style.visibility = 'hidden';
                window.print()
                printButton.style.visibility = 'visible';
            }
        </script>


    </head>

    <body>

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
                        <!-- <li><a href="#news" class="smoothScroll">Admission Details</a></li>
                        <li><a href="signup.php" class="smoothScroll">Register</a></li> -->
                        <li><a href="#Sign_in" class="smoothScroll">Login</a></li>
                        <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                        <li><a href="#about" class="smoothScroll">About Us</a></li>
                        <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                    </ul>
                </div>

            </div>
        </section>



        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <table class="table table-bordered" style="font-family: Verdana">

                            <tr>
                                <td style="width:3%;"><br><br><img src="./images/logo.png" width="80%"> </td>
                                <td style="width:8%;">
                                    <center>
                                        <font style="font-family:Arial Black; font-size:20px;">
                                            <br><br>
                                            Bangladesh Army University of Engineering and Technology
                                        </font>
                                    </center>

                                    <center>
                                        <font style="font-family:Verdana; font-size:18px;">
                                            Phone : 022 2754 1005, Fax : (0674)2490480
                                        </font>
                                    </center>

                                    <br>
                                    <br>
                                    <center>
                                        <font style="font-family:Arial Black; font-size:20px;">
                                            ADMISSIONS (2022-23)</font>
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




                                    $resdata = mysqli_query($con, "SELECT * FROM t_user_data WHERE s_id='" . $_SESSION['user'] . "'");

                                    while ($rowdata = mysqli_fetch_array($resdata)) {


                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:4%;">
                                    <font style="font-family: Verdana;">Name </font>
                                </td>
                                <td style="width:8%;" colspan="3"> <?php echo $stname; ?> </td>
                            </tr>


                            <tr>
                                <td>
                                    <font style="font-family: Verdana;">Register ID </font>
                                </td>
                                <td colspan="3"> <?php echo $id ?> </td>
                            </tr>


                            <tr>
                                <td>
                                    <font style="font-family: Verdana;">Date of Birth </font>
                                </td>
                                <td colspan="3"> <?php echo $rowdata[2] ?> </td>
                            </tr>

                            <tr>
                                <td>
                                    <font style="font-family: Verdana;">Email </font>
                                </td>
                                <td colspan="3"> <?php echo $rowdata[4]  ?> </td>
                            </tr>
                        <?php
                                    }
                        ?>


                        <tr>
                            <td>
                                <font style="font-family: Verdana;"> Mobile No.</font>
                            </td>
                            <td colspan="3"> <?php echo 'Telephone - ' . $row[2] . '   ' ?><br>
                                <?php echo ' Mobile - ' . $row[3] ?></td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;"> Father's Name</font>
                            </td>
                            <td colspan="3"><?php echo $row[4] ?> </td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Father's Occupation</font>
                            </td>
                            <td> <?php echo $row[5] ?></td>
                            <td>
                                <font style="font-family: Verdana;"> Mobile No.</font>
                            </td>
                            <td> <?php echo $row[6] ?> </td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Mother's Name</font>
                            </td>
                            <td colspan="3"> <?php echo $row[7] ?></td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Mother's Occupation</font>
                            </td>
                            <td> <?php echo $row[8] ?> </td>
                            <td>
                                <font style="font-family: Verdana;">Mobile No.</font>
                            </td>
                            <td> <?php echo $row[9] ?></td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;"> Income of Parents </font>
                            <td colspan="3"><?php echo $row[10] ?></td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Sex </font>
                            <td colspan="3"><?php echo $row[11] ?></td>

                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;"> Correspondent Address</font>
                            <td colspan="3"><?php echo 'Address :' . $row[12] ?><br>
                                <?php echo 'State :' . $row[13] ?><br>
                                <?php echo 'Pin :' . $row[14] ?><br>
                                <?php echo 'Mobile :' . $row[15] ?><br>
                            </td>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Permanent Address</font>
                            <td colspan="3"><?php echo 'Address :' . $row[16] ?><br>
                                <?php echo 'State :' . $row[17] ?><br>
                                <?php echo 'Pin :' . $row[18] ?><br>
                                <?php echo 'Mobile :' . $row[19] ?><br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">From</font>
                            <td colspan="3"> <?php echo  $row[20] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;"> Nationality</font>
                            <td> <?php echo $row[21] ?></td>
                            <td>
                                <font style="font-family: Verdana;"> Religion</font>
                            <td> <?php echo $row[22] ?></td>
                        </tr>


                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Choice of Department:</font>
                            </td>
                            <td colspan="3"><?php echo $row[28] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <font style="font-family: Verdana;">Academic Qualification</font>
                            </td>
                            <td colspan="3">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">Exam</font> <br>
                                                <font style="font-family: Verdana; 
                                     font-size: small">passed</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">Name of</font> <br>
                                                <font style="font-family: 
                                     Verdana;font-size: small">Board/University</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">Year of</font> <br>
                                                <font style="font-family: 
                                     Verdana;font-size: small"> Passing</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">Total</font><br>
                                                <font style="font-family: Verdana; 
                                     font-size: small"> Mark</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">Mark</font> <br>
                                                <font style="font-family: Verdana; 
                                     font-size: small">Obtained</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">GPA</font>
                                            </th>
                                            <th>
                                                <font style="font-family: Verdana;font-size: small">% of</font><br>
                                                <font style="font-family: Verdana;  
                                     font-size: small"> Marks</font>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "SSC"; ?></td>
                                            <td><?php echo $row[33] ?></td>
                                            <td><?php echo $row[34] ?></td>
                                            <td><?php echo $row[35] ?></td>
                                            <td><?php echo $row[36] ?></td>
                                            <td><?php echo $row[37] ?></td>
                                            <td><?php echo $row[38] ?></td>

                                        </tr>
                                        <tr>
                                            <td><?php echo "HSC"; ?> </td>
                                            <td><?php echo $row[39] ?></td>
                                            <td><?php echo $row[40] ?></td>
                                            <td><?php echo $row[41] ?></td>
                                            <td><?php echo $row[42] ?></td>
                                            <td><?php echo $row[43] ?></td>
                                            <td><?php echo $row[44] ?></td>
                                        </tr>

                                    </tbody>
                                </table>

                        <tr>
                            <td colspan="2">
                                <?php
                                $picfile_path1 = 'studentproof/';
                                $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $_SESSION['user'] . "'");
                                while ($row2 = mysqli_fetch_array($result2)) {
                                    $picsrc1 = $picfile_path1 . $row2['s_sigpic'];
                                    echo "<img src='$picsrc1.' class='img-thumbnail' width='180px' style='height:80px;'>";
                                    echo "<div>";
                                }
                                ?>
                            </td>
                        </tr>


                        <tr>


                            <td colspan="1">
                                <center>
                                    <font style="font-family: Verdana;">Signature</font>
                                </center>
                            </td>
                        </tr>

                        </table>
                    </center>
                </div>
            </div>
        </div>
    <?php
}
    ?>
    <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>


    </body>

    </html>