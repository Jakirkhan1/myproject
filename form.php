<?php
session_start();
error_reporting(0);

$con = mysqli_connect("localhost", "root", "", "oas");

if (!isset($con)) {
    die("Database Not Found");
}
?>

<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>ADMISSION PAGE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    

</head>
<style>
    * {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .header {
        padding: 40px;
        background-color: forestgreen;
        text-align: center;
    }

    .header label {
        color: white;
        font-size: 50px;
    }

    .profile {
        position: absolute;
        left: 0;
        cursor: pointer;
        margin: 0px 10px;
        width: 60px;
        border-radius: 80px;
    }

    .register {
        font-size: 30px;
    }

    input[type="submit"] {
        color: white;
        background-color: blue;
        font-size: 20px;
        padding: 10px;
        border: none;
        border-radius: 60px;
        width: 100px;
        box-shadow: 4px 5px 1px grey;
        cursor: pointer;
    }

    input[type="reset"] {
        color: blue;
        background-color: white;
        font-size: 20px;
        padding: 10px;
        border: none;
        border-radius: 60px;
        width: 100px;
        box-shadow: 4px 5px 1px grey;
        cursor: pointer;
    }
</style>

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
                    
                    <li><a href="login.php" class="smoothScroll">Login</a></li>
                    <li><a href="form.php" class="smoothScroll">Form Fill Up</a></li>
                    <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                </ul>
            </div>

        </div>
    </section>


    <center>

        <div class="main">
            <!-- <a href="profile.php"><img src="avatar.png" class="profile"></a> -->

            

            <form method="POST" action="Student_id.php">

                <label class="register">Form Fill Up Here</label>
                <table>
                    <tr>
                        <td>
                            <h3>Personal Information</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Register No. </td>
                        <!--Ager form ar register number aikhane bosate hobe-->
                        <td><input type="text" id="regno" name="regno" ></td>
                    </tr>

                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" id="fname" name="fname" ></td>

                    </tr>

                    <tr>
                        <td>Address</td>
                        <td>
                            <textarea class="textarea" id="address" name="address" >></textarea>
                        </td>
                        <td>Contact No.</td>
                        <td><input type="text" id="contact" name="contact" >></td>

                        <td>E-Mail</td>
                        <td><input type="text" id="mail" name="mail" >></td>
                    </tr>

                    <tr>

                        <td>Date Of Birth</td>
                        <td><input type="date" id="dob" name="dob" >></td>

                        <td>Gender</td>
                        <td>

                            <select id="gender" name="gender">
                                <option name="gender" value="Male">Male</option>
                                <option name="gender" value="Female">Female</option>
                            </select>
                        </td>


                    </tr>

                    <tr>
                        <td>Religion</td>
                        <td><input type="text" id="religion" name="religion" ></td>

                        <td>Nationality</td>
                        <td><input type="text" id="nationality" name="nationality" ></td>

                    </tr>



                    <tr>
                        <td>
                            <h3>Academic Information</h3>
                        </td>
                    </tr>
                    <tr>


                        <td>Choice of Department :</td>
                        <td><select id="department" name="department" >>
                                <option>COMPUTER SCIENCE & ENGINEERING</option>
                                <option>CIVIL ENGINEERING</option>
                                <option>ELECTRICAL & ELECTRONIC lectronic ENGINEERING</option>
                                <option>INFORMATION & COMMUNICATION ENGINEERING</option>
                                <option>MECHANICAL ENGINEERING</option>
                                <option>ENGLISH</option>
                                <option>LAW & JUSTICE</option>
                                <option>BBA</option>
                            </select>
                        </td>

                    </tr>



                </table>
                <br><br>

                <a href="doc_up.php">Document Upload</button></a>
                <br><br>
                <!-- <input type="reset" name="reset" value="Reset"> -->
                <input type="submit" id="submit" name="submit" value="Next">
               
                </form>
                
            </form>
        </div>
    </center>
</body>

</html>