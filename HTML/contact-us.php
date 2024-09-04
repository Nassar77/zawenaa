<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap File -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Fontawesom File -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Render all Elemants Normally  -->
    <link rel="stylesheet" href="../CSS/normalize.css">
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="../CSS/contact-us.css"> -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <title>Connect With US</title>
    <!-- internal style -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/


        /* start body style */
        section.main {
            background-color: #3b363694;
            width: 600px;
            padding: 22px;
            margin: 20px auto;
            text-align: center;
            color: #62bedb;
        }

        section.main div.discrip p,
        section.main div.discrip a {
            font-size: 20px;
            color: #fff;
        }

        section.main div.discrip a {
            text-decoration: none;
            font-weight: bold;
        }

        section.main div.discrip a:hover {
            color: black;
            background: #8f8989;
        }

        /* end body style */
    </style>
</head>

<body>
    <!-- start header -->
    <header class="contianer">
        <!-- Old logo 
        <h1 class="lable">zwena</h1> 
        -->
        <!-- new logo -->
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
                <a href="../HTML/contact-us.php" class="sub-items" target="_self">
                    <img src="../image/eg-logo.png" alt="egypt-logo" class="eg-logo">
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

    <!-- start body -->
    <section class="main">
        <h2 class="massage">Contact Us | تواصل معانا</h2>
        <div class="discrip">
            <p class="prf en-discrip">For any inquiries please contact us</p>
            <p class="prf ar-discrip">للاستفسارات تواصل معنا</p>
            <a href="#" target="_self" class="link">info@Zwena.com</a>
        </div>
    </section>
    <!-- End body -->

    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <!-- 
                    old logo in footer
                    <h4 class="lable l-foot l-logo">zwena</h4> 
                -->
                <img src="../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">Povides services to people with special needs seeking training or work, or both.
                </p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">Information and Communication</h4>
                <a href="../HTML/contact-us.php" class="links-foot call-us" target="_self">CALL US</a>
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