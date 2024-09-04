<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap File -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Fontawesom File --> 
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Render all Elemants Normally  -->
    <link rel="stylesheet" href="../CSS/normalize.css">
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="../CSS/Home page.css"> -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <title>Home Page</title>
    <!-- internal style -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/


        /* start pref about us style */
        /* image discrip our audiance */
        div.about-us {
            height: 240px;
            position: relative;
            margin-bottom: 50px;
        }

        /* text discrip what we do */
        div.about-us p.discription {
            text-align: center;
            top: 15%;
            width: 50%;
            left: 25%;
            color: #fff;
            font-size: 25px;
            position: absolute;
            background-color: #3b363663;
        }

        /* end pref about us style */

        /* start features*/
        section.first {
            padding: 20px;
            color: #62bedb;
        }

        section.first div.features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
        }

        section.first div.features div.sub-features {
            padding: 20px;
            text-align: center;
            background-color: #3b363663;
            border-radius: 10px;
        }

        section.first div.features div.sub-features svg {
            font-size: 40px;

        }

        section.first div.features div.sub-features h2 {
            font-weight: 800;
            margin: 10px 0;
            font-size: 25px;
        }

        section.first div.features div.sub-features h2::first-line {
            background-color: #3b363663;
            border-radius: 4px;
        }

        section.first div.features div.sub-features p {
            color: #fff;
            font-size: 22px;
            /* font-weight: bold; */
            line-height: 1.8;
        }

        /* end features  */

        /* start Register button style */
        div.enter {
            width: 625px;
            display: flex;
            margin: auto;
        }

        div.enter a.button {
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            text-transform: capitalize;
        }

        div.enter a.button:hover {
            color: black;
        }

        div.enter a.button div.Register-button {
            width: 300px;
            margin: 20px auto;
            margin-right: 25px;
            background-color: #3b363687;
            padding: 15px;
            text-align: center;
            border-radius: 6px;
            box-shadow: 3px 3px 0 #040404b8;

        }

        /* End Regiter button style */
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

    <!-- start pref about us -->
    <div class="about-us">
        <p class="discription">ZWENA website helps people with special needs find employment and training
            opportunities in various places and specializations.<br>
            Helping companies achieve their social responsibility
            through training and employing people with special needs in various jobs and specializations.</p>
    </div>
    <!-- End pref about us -->

    <!-- start features -->
    <section class="first">
        <div class="features">
            <div class="sub-features">
                <i class="fa-solid fa-book-open-reader"></i>
                <h2 class="heading">Training</h2>
                <p class="training-discription">
                    Training people with special needs to acquire new skills in the labor market from multiple
                    entities,
                    and obtaining them from those entities.<br>
                    Helping companies find qualified cadres with people with special needs to fulfill their role
                    towards
                    society.
                </p>
            </div>
            <div class="sub-features">
                <i class="fa-solid fa-briefcase"></i>
                <h2 class="heading">Employment</h2>
                <p class="training-discription">
                    Helping people with special needs find suitable job opportunities in various places. <br>
                    Helping companies find qualified people with special needs in various jobs in a way that enables
                    them
                    to achieve their goals.
                </p>
            </div>
        </div>
    </section>
    <!-- end features -->

    <!-- start Register button -->
    <div class="enter">
        <a href="../HTML/Login.php" class="button" target="_self">
            <div class="Register-button">
                Log in
            </div>
        </a>
        <a href="../HTML/registration.php" class="button" target="_self">
            <div class="Register-button">
                rigestration
            </div>
        </a>
    </div>
    <!-- End Regiter button -->

    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <!-- <h4 class="lable l-foot l-logo">zwena</h4> -->
                <img src="../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">Povides services to people with special needs seeking training or work, or both.
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


    <!-- -------------------sperator----------------- -->
    <!-- <script src="../JS/bootstrap.bundle.min.js"></script> -->
    <script src="../JS/all.min.js"></script>

</body>

</html>