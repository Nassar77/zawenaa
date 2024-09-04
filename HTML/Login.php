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
    <!-- <link rel="stylesheet" href="../CSS/login.css"> -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <title>Log in</title>
    <!-- Internal style  -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/



        fieldset {
            width: 500px;
            margin: 20px auto;
            border-color: transparent;
            background-color: #00000087;
            border-radius: 28px;
            padding-bottom: 20px;
        }

        legend {
            font-family: serif;
            font-weight: bold;
            color: #fff;
        }

        .first {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            padding: 10px;
            position: relative;
        }

        .user-icon {
            position: absolute;
            left: 128px;
            top: 12px;
            font-size: 20px;
        }

        .second {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            padding: 10px;
            margin-top: -20px;
            position: relative;
        }

        .lock-icon {
            position: absolute;
            left: 128px;
            top: 12px;
            font-size: 20px;
        }

        ::placeholder {

            text-align: left;
            color: #fff;
            font-size: 20px;
        }

        input {
            border-color: transparent transparent #00000059 transparent;
            width: 267px;
            border-width: 5px;
            height: 35px;
            background-color: transparent;
            background-color: #ffffffb3;
            font-weight: bold;
            font-size: 20px;
            color: #000;
            padding-left: 30px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        div.buttones {
            display: flex;
            justify-content: center;
            color: #fff;
            flex-wrap: wrap;
            width: 100%;
            padding: 10px;

        }

        div.buttones a {
            color: #fff;
            width: 267px;
            /* height: 35px; */
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            margin-bottom: 5px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
        }

        .submit {
            margin-top: -20px;
            background-color: #960606c2;
        }

        .register {
            background-color: #777a74d1;
        }

        .register {
            text-decoration: none;
            color: #fff;
        }

        .forgotpass {
            border-color: transparent;
            background-color: transparent;
            font-size: 16px !important;
            margin-top: -10px;
            color: #dedede;
        }

        .sperator {
            margin-top: -14px;
            width: 75%;
            height: 4px;
            position: relative;
            background-color: #9e9e9e69;
            display: block;
            left: 55px;
        }

        .sperator::before {
            content: "or";
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgb(128, 124, 124);
            color: #ffffffad;
            left: 49%;
            position: absolute;
            text-align: center;
            top: -7px;
        }

        div.other-way {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
        }

        .google,
        .facebook {
            text-decoration: none;
            color: #fff;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
            width: 223px;
            margin-top: 15px;
            border-radius: 4px;
            font-size: 17px;
        }

        .google {
            background-color: rgb(255, 60, 0);
        }

        .facebook {
            background-color: #0000ffcc;
        }

        .google-icon,
        .facebook-icon {
            width: 20px;
            height: 20px;
            position: relative;
            left: -8px;
            top: -2px;
        }

        .facebook-icon {
            left: -5px;
        }
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
                <a href="../HTML/Arabic-HTML/login-ar.php" class="sub-items" target="_self">
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

    <section class="one">
        <article class="log-in">
            <fieldset>
                <form action="#" method="post">\
                    <div class="first">
                        <!-- <label for="mail">Email</label> -->
                        <input type="email" name="e-mail" id="mail" placeholder=" Your Email" required autofocus>
                        <span class="user-icon"> <i class="fa-solid fa-user"></i></span>
                    </div>
                    <br>
                    <div class="second">
                        <!-- <label for="pass" class="pass-1">Password</label> -->
                        <input type="password" id="pass" name="pass" placeholder=" Your Password" required>
                        <span class="lock-icon"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <br>
                    <div class="buttones">
                        <a class="submit" type="submit" href="#">Login</a>
                        <a class="register" href="../HTML/registration.php" target="_self">Register</a>
                        <a class="forgotpass" href="../HTML/forgetpass.php" target="_self">Forgot password?</a>
                    </div>
                    <span class="sperator"></span>
                    <div class="other-way">
                        <a class="google" href="https:\\www.google.com" target="_self"><img class="google-icon"
                                src="../image/Google.png">Login with Google</a>
                        <a class="facebook" href="https:\\www.facebook.com" target="_self"><img
                                src="../image/facebook.png" class="facebook-icon">Login with Facebook</a>
                    </div>
                </form>
            </fieldset>
        </article>
    </section>
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