<?php
error_reporting(0);
$getid = $_GET["id"];
$con = mysqli_connect("localhost", "root", "", "oas");
if (!isset($con)) {
    die("Database Not Found");
}


$q = mysqli_query($con, "select s_name from t_user_data where s_id='" . $getid . "'");
$n =  mysqli_fetch_assoc($q);
$stname = $n['s_name'];

$result = mysqli_query($con, "SELECT * FROM t_user WHERE s_id='" . $getid . "'");

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
        <form id="adminac" action="adminac.php" method="post">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                            <table class="table table-bordered" style="font-family: Verdana">

                                <tr>
                                    <td style="width:3%;"><img src="./images/smiu-logo.png" width="80%"> </td>
                                    <td style="width:8%;">
                                        <center>
                                            <font style="font-family:Arial Black; font-size:20px;">
                                                Bangladesh Army University of Engineering & Technology </font>
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
                                                Admit Card (2022-23)</font>
                                        </center>
                                    </td>
                                    <td colspan="2" width="3%">
                                        <?php

                                        $picfile_path = 'studentpic/';

                                        $result1 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $getid . "'");

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
                                            <?php echo $getid ?></font>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">Date</font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            10th June 2023</font>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width:4%;">
                                        <font style="font-family: Verdana;">Time </font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                            3:00 PM - 4:00 PM </font>
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
                                        <font style="font-family: Verdana;">University Name & Address  </font>
                                    </td>
                                    <td style="width:8%;" colspan="3">
                                        <font style="font-family: Verdana; font-weight: bold">
                                        Bangladesh Army University of Engineering & Technology <br>
                               <br>
                                            
                                            <!-- Sector 4, Vikas Nagar, Koparkhairane,<br>
                                            Navi Mumbai - 400 079 <br> -->
                                            +8801327541005, +08801327541006
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
                1. This Registeration Card must be presented for verification at the time of submission of registration form, along with at least two
                   original photograp and valid photo identification card.
                   (e.g : NID Card).
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                2. This Registeration Card is valid only if the candidate's photograph and signature images are <b> legibly printed</b>.
                   Print this on an A4 sized paper using a laser printer preferably a color photo printer.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                3. Registration card must be attach front of registration form.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                4. Candidates will not be allowed to enter the unniversity premises without registration card.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                5.Without registration card the form will not be acceptable in admission section.
            </p>
            
         
            </font>

            <center><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
        </form>
    </body>

    </html>