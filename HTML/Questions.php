<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesom File -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Render all Elemants Normally  -->
    <link rel="stylesheet" href="../CSS/normalize.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Quick Test</title>
    <!-- internal style -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            background-image: url(../../Graduation/image/jon-tyson-O7ke8N4kTpQ-unsplash.jpg);
            background-size: cover;
            direction: ltr;
        }



        form {
            width: 650px;
            height: fit-content;
            padding-top: 25px;
            padding-bottom: 25px;
            border: 1px solid #00baff;
            border-radius: 20px;
            margin: 50px auto;
            text-align: center;
            background-color: #202a32b3;
        }

        .one1 {
            color: #62bedb;
            font-size: 50px;
            font-weight: bold;
            text-align: center;

        }

        .two2 {
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            margin-top: 15px;
            text-transform: capitalize;
        }

        .three3 {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            text-transform: capitalize;
        }

        label {
            color: #ffffff;
            display: inline;
            font-weight: bold;
            font-size: 22px;
        }

        input {
            background-color: #bfbabaa3;
            color: #fff;
            width: 440px;
            height: 60px;
            font-size: 20px;
            padding-top: 5px;
            padding-left: 15px;
            border-radius: 6px;
            border: none;
            outline: none;
        }

        input::placeholder {
            color: #fff;
            text-align: center;
        }

        .button {
            background-color: #146483;
            color: #fff;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 4px;
            text-decoration: none;
            border: 1px solid #146483;
            margin-left: 390px;
            width: 120px;
            padding: 10px 0;
            text-transform: uppercase;

        }
    </style>

</head>

<body>

    <!-- start header -->
    <header class="contianer">
        <!-- test image -->
        <div class="left">
            <img src="../image/logo.png" alt="zwena logo" class="logo-test">
        </div>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../HTML/Home page.php" class="sub-items" target="_blank">Home</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_blank">About</a>
            </li>
            <!-- mesage to user -->
            <li class="big-items with-message">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_self">
                    <i class="fa-solid fa-envelope"></i>
                    Message
                </a>
                <!--start test message to user -->
                <ul class="dropdwon-menu message">
                    <li class="menu-items">
                        <p class="message-to-user">There are no new messages.</p>
                    </li>
                </ul>
                <!--end test message to user -->
            <li class="big-items">
                <a href="../HTML/Arabic-HTML/Question-ar.php" class="sub-items" target="_blank">
                    <img src="../../Graduation/image/eg-logo.png" alt="egypt-logo" class="eg-logo">
                    Arabic
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- This will stay "#" because it is not a link. -->
                <a href="#" class="sub-items ">
                    <i class="fa-solid fa-user"></i>
                    Login
                </a>
                <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item">
                            <i class="fa-solid fa-user"></i>
                            Profil</a>
                    </li>
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item">
                            <i class="fa-solid fa-person-running"></i>
                            Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- end header -->

    <form action="submit.php" method="post">

        <h2 class="one1">Questions</h2>
        <br>
        <div class="three3">
            Please answer the questions
        </div>
        <br>
        <hr>
        <br>
        <form name="feedback_form" id="feedback_form" method="post">
            <br>

            <div class="Quastion">
                <h3 class="two2">What qualifies you for the job?</h3>
                <br>
                <input class="form-control" required placeholder="write your answer" name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2">What do you know about the company?</h3>
                <br>
                <input class="form-control" required placeholder="write your answer" name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2">What are your goals in your career?</h3>
                <br>
                <input class="form-control" required placeholder="write your answer" name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2">How much time do you need to start working?</h3>
                <br>
                <input class="form-control" required placeholder="write your answer" name="comments"></input>
            </div>
            <br>
            <div class="button"><a href="#"></a> Apply </a></div>


        </form>
    </form>



    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <img src="../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">Povides services to people with special needs seeking training or work, or both.
                </p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">Information and Communication</h4>
                <a href="../HTML/contact-us.php" class="links-foot call-us" target="_blank">CALL US</a>
                <a href="#" class="links-foot policy" target="_blank">Terms and Conditions</a>
            </div>
            <div class="sub-div-in-foot info-about-jobs">
                <h4 class="lable l-foot">Jobs by field</h4>
                <div class="jobs">
                    <div class="sub-job">Accounting</div>
                    <div class="sub-job">Managament</div>
                    <div class="sub-job" style="    grid-column-start: 1;
                    grid-column-end: 3;">Administrative affairs</div>
                    <div class="sub-job">Marketing</div>
                    <div class="sub-job">Sales</div>
                    <div class="sub-job" style="    grid-column-start: 1;
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

    <script src="../../Graduation/JS/all.min.js"></script>
    <!-- <script src="../../Graduation/JS/bootstrap.bundle.min.js"></script> -->
</body>

</html>