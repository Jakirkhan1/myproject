<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student ID Card</title>
    <style>
        body {
            background-color: silver;
        }

        #div1 {
            margin: 0px;
            padding: 0px;
            border: 2px solid black;
            width: 540px;
            height: 350px;
            margin-left: 470px;
            margin-top: 60px;
            border-radius: 0px;
            background-color: white;
        }

        #p1 {
            background-color: rgb(24, 34, 90);
            margin: 0px;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 30px;
            padding: 10px;

        }

        img {
            border: 1px solid black;
            width: 170px;
            height: 187px;
            margin: 0px;
            padding: 0px;
            margin-top: 20px;
            margin-left: 20px;
            float: left;
        }

        #div2 {
            float: left;
            margin-left: 40px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        #p2 {
            margin-top: 0px;
            margin-bottom: 5px;
        }

        #label1 {
            font-size: 23px;
            font-weight: bold;
            opacity: 0.7;
        }

        #label2 {
            font-size: 25px;
            font-weight: bold;
            margin-left: 15px;
        }

        h2 {
            margin-left: 12px;
            margin-bottom: 0px;
            font-size: larger;
            font-style: oblique;
            text-align: center;
        }

        h4 {
            margin-top: 0px;
            float: left;
            margin-left: 10px;
        }
        a{
            color: red;
        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
   
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>

<body>
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="smoothScroll">Home</a></li>

                    <li><a href="login.php" class="smoothScroll">Login</a></li>
                    <!-- <li><a href="form.php" class="smoothScroll">Form Fill Up</a></li> -->
                    <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                </ul>
            </div>

        </div>
    </section>



    <div id="div1">
        <h2>Bangladesh Army University of Engineering & Technology</h2>
        <p id="p1">STUDENT IDENTIFICATION CARD</p>
        <img src="images/img1.jpg" alt="">
        <div id="div2">
            <p id="p2"><label id="label1">Name:</label> <label id="label2">MD. X Hasan</label></p>
            <p id="p2"><label id="label1">D.O.B:</label> <label id="label2">23/09/2002</label></p>
            <p id="p2"><label id="label1">ID NO:</label> <label id="label2">18005686</label></p>
            <p id="p2"><label id="label1">Issued:</label> <label id="label2">January 2023</label></p>
            <p id="p2"><label id="label1">Expires:</label> <label id="label2">December 2027</label></p>
        </div>
        <!-- <h3>Bangladesh Army University of Engineering & Technology</h3> -->
        <h4 style="margin-left: 60px;">www.bauet.ac.bd,</h4>
        <h4>Bauet@gmail.com</h4>

    </div>
    <center>
        <font><input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></font>
    </center>



    <script type="text/javascript">
        function printpage() {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
            printButton.style.visibility = 'visible';
        }
    </script>
</body>

</html>