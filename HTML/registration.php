<?php
     // astd3a el conect and code
    require_once '../php/cv.php';
    // require_once 'colect.php';
    
?>
<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- <link rel="stylesheet" href="../CSS/registration.css"> -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <title>Registration</title>
    <!-- internal style -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/
        body {
            background-image: url(../image/jon-tyson-O7ke8N4kTpQ-unsplash.jpg);
        }

        .logo {

            background-color: #9591915c;
            display: inline-block;
            font-size: 50px;
            margin-top: 0;
            margin-left: 35px;
            padding: 10px;
            padding-left: 15px;
        }

        /* start form */
        fieldset {
            width: 400px;
            margin: 25px auto;
            box-shadow: 1px 1px 1px 1px #9e9e9e6b, 1px 1px 1px 1px #9e9e9e6b;
            background-color: #808080bf;
            padding: 5px;
        }

        form {
            width: 85%;
            margin: auto;
            padding: 10px 21px;
        }

        label {
            text-transform: capitalize;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 22px;
            font-weight: bold;
        }

        input {
            display: block;
            margin-bottom: 10px;
            margin-top: 4px;
            width: 300px;
            height: 30px;
            padding-left: 8px;
            font-size: large;
            outline: none;
            border: none;
            border-bottom: 2px solid;
            border-radius: 6px;
            background-color: #ffffff96;
        }

        div.major {
            display: flex;
        }

        div.major input {
            width: 100px;
            margin-left: -35px !important;
        }

        div.major #company {
            position: relative;
            right: -80px;
        }

        div.major label {
            width: 50px;
            margin-left: -30px;
            margin-top: 5px;
            font-size: 22px;
        }

        .company {
            position: relative;
            right: -83px;
        }

        label+span {
            color: red;
        }

        .google,
        .facebook {
            text-decoration: none;
            color: #fff;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
            width: 300px;
            display: block;
            margin-bottom: 3px;
            border-radius: 4px;
            font-size: 18px;
        }

        .google {
            background-color: rgb(255, 60, 0);
            margin-bottom: 4px;
        }

        .facebook {
            background-color: #0000ffcc;
        }

        .google-icon,
        .facebook-icon {
            width: 20px;
            height: 20px;
            position: relative;
            left: -17px;

        }

        .facebook-icon {
            left: -7px;
        }

        .submit {
            border: none;
            width: 210px;
            background: #000000e3;
            color: #fff;
            border-radius: 4px;
            display: inline;
        }

        .reset {
            border: none;
            width: 74px;
            background: #272626;
            color: #fff;
            border-radius: 4px;
            display: inline;
        }

        .back-to-login {
            background-color: #ffffff96;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 4px;
            font-size: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            width: 300px;
            display: block;
            text-transform: capitalize;
        }

        .login-page {
            text-decoration: none;
            color: #504f4f;
            font-size: 19px;
        }

        .login-page:hover {
            text-decoration: underline;
        }

        /* end form */
    </style>
</head>

<body>
    <!-- start header -->
    <header class="contianer">
        <!-- <h1 class="lable">zwena</h1> -->
        <!-- test image -->
        <div class="left">
            <img src="../image/logo.png" alt="zwena logo" class="logo-test">
        </div>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../HTML/Home page.php" class="sub-items" target="_self">Home</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_self">About</a>
            </li>
            <li class="big-items">
                <a href="../HTML/Arabic-HTML/Home-page-ar.php" class="sub-items" target="_self">
                    <img src="../image/eg-logo.png" alt="egypt-logo" class="eg-logo">
                    Arabic
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- This will stay "#" because it is not a link. -->
                <a href="../HTML/Login.php" class="sub-items ">
                    <i class="fa-solid fa-user"></i>
                    Login
                </a>
                <!-- i dont need this menu in this page.  -->
                <!-- 
                    <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_self">
                            <i class="fa-solid fa-user"></i>
                            Profil</a>
                    </li>
                     //**ask group about there opinion**//
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_self">
                            <i class="fa-solid fa-bell"></i>
                            Notifications</a>
                    </li>
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item">
                            <i class="fa-solid fa-person-running"></i>
                            Log out</a>
                    </li>
                </ul> 
            -->
            </li>
        </ul>
    </header>
    <!-- end header -->
    <!-- start form -->
    
    <fieldset>
        <form action="" method="post">
            <div class="user-name">
                <label for="f-name">User Name:</label>
                <span>*</span>
                <input type="text" id="f-name" required maxlength="35" accept="charset" name="name">
            </div>
            <div class="e-mail">
                <label for="mail">Email Address:</label>
                <span>*</span>
                <input type="email" id="mail" name="email" required>
            </div>
            <div class="password">
                <label for="pass-1">Password:</label>
                <span>*</span>
                <input type="password" id="pass-1" name="pass" required accept="charset, number, sembol">
                <label for="pass-2">Confirm Password:</label>
                <span>*</span>
                <input type="password" id="pass-2" name="copass" required accept="charset, number, sembol">
            </div>
            <!-- WE dont need these files now -->

            <div class="major">
                <input type="radio"  value="employe" name="major" id="employment">
                <label for="employment">Employmnt</label>
                <input type="radio" value="company" name="major" id="company">
                <label for="company" class="company">Company</label>
            </div>
            <!--
           <div class="identfire">
                <label for="id">ID</label>
                <span>*</span>
                <input type="text">
                <p class="ask-id">if you donot have this number <a href="#" id="identfier">Click Here</a></p>
            </div>
            <div class="photo">
                <label for="photo">Your Photo:</label>
                <input id="photo" type="file">
            </div> -->
            <!-- WE dont need these files now -->
            <input type="submit" name="Submit" class="submit">
            <input type="reset" value="Reset" class="reset">
            <span class="back-to-login">Have an account?<a class="login-page" href="../HTML/login.php">
                    Login</a></span>
            <a class="google" href="https:\\www.google.com"><img class="google-icon" src="../image/Google.png">Register
                with
                Google</a>
            <a class="facebook" href="https:\\www.facebook.com"><img src="../image/facebook.png"
                    class="facebook-icon">Register
                with
                Facebook</a>
        </form>
    </fieldset>
    <!-- end form -->
    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <!-- <h4 class="lable l-foot l-logo">zwena</h4> -->
                <img src="../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">Povides services to people with special needs seeking training or work, or
                    both.
                </p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">Information and Communication</h4>
                <a href="../HTML/contact-us.php" class="links-foot call-us" target="_self">CALL US</a>
                <!-- "#" => page does not completed. -->
                <a href="#" class="links-foot policy" target="_self">Terms and Conditions</a>
            </div>
            <div class="sub-div-in-foot info-about-jobs">
                <h4 class="lable l-foot">Jobs by field</h4>
                <div class="jobs">
                    <div class="sub-job">Accounting</div>
                    <div class="sub-job">Managament</div>
                    <div class="sub-job" style="grid-column-start: 1;
                        grid-column-end: 3;">Administrative affairs</div>
                    <div class="sub-job">Marketing</div>
                    <div class="sub-job">Sales</div>
                    <div class="sub-job" style="grid-column-start: 1;
                        grid-column-end: 3;">Higher qualifications</div>
                    <div class="sub-job">Computers</div>
                    <div class="sub-job">Technicians</div>
                    <div class="sub-job">Workers</div>
                    <div class="sub-job">Other</div>
                </div>
            </div>
            <div class="sub-div-in-foot following">
                <h4 class="lable l-foot follow-us">Follow Us</h4>
                <div class="our-mail">Zwena@</div>
                <div class="chanells">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="end-foot">All rights reserved to ZWENA Company 2024&copy;</div>
        </div>
    </footer>
    <!-- end footer -->

    <script src="../JS/all.min.js"></script>
</body>

</html>