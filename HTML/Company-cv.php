<?php
     // astd3a el conect and code
    require_once '../php/cv.php';
    require_once '../php/regist.php';
    // require_once 'colect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Graduation/CSS/all.min.css">
    <link rel="stylesheet" href="../../Graduation/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Company Registration Page</title>

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

        /*  start header style */
        header.contianer {
            width: 100%;
            padding-right: 30px;
            background-color: #282c4e;
            color: #fff;
            /* overflow: hidden; */
            display: flex;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        header h1.lable {
            width: 20%;
            margin: 0;
            padding: 20px;
            font-size: 23px;
            text-align: right;
            text-transform: uppercase;

        }

        header ul.nav-links {
            width: 80%;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-content: center;
            flex-wrap: wrap;
            list-style: none;

        }

        li.big-items a.sub-items {
            color: #fff;
            margin-left: 10px;
            margin-right: 10px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        li.big-items a.sub-items:hover {
            color: black;
        }

        li.big-items.with-menu:hover ul.dropdwon-menu {
            display: block;
        }


        li.big-items .eg-logo {
            width: 20px;
            height: 15px;
        }

        ul.dropdwon-menu {
            padding: 0;
            min-width: 150px;
            position: absolute;
            right: 38px;
            top: 57px;
            /* background-color: #f6f6f6; */
            background-color: #282c4ecf;
            list-style: none;
            z-index: 2;
            display: none;
        }

        ul.dropdwon-menu::before {
            content: "";
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent #f6f6f6 transparent;
            position: absolute;
            right: 5px;
            top: -20px;
        }

        ul.dropdwon-menu li.menu-items a.sub-manu-item {
            display: block;
            text-decoration: none;
            /* color: #333; */
            color: #fff;
            transition: .3s;
            padding: 15px;
        }

        ul.dropdwon-menu li.menu-items a:hover {
            padding-left: 25px;
        }

        ul.dropdwon-menu li.menu-items:not(:last-child) a {
            /* border-bottom: 1px solid #333; */
            border-bottom: 1px solid #111111;
        }

        /* end header style */

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


        .h2 {
            color: #62bedb;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }

        label {
            color: #fff;
            display: block;
            margin-bottom: -18px;
            text-align: center;
            position: relative;
            font-weight: bold;
            font-size: 22px;
        }

        label.test::before,
        label.test::after {
            position: absolute;
            color: #fff;
            background: radial-gradient(black, transparent);
            font-size: 20px;
            font-weight: bold;
            left: 42%;
        }

        label.test::before {
            content: "Add Photo,";
            top: 65px;
        }

        label.test::after {
            content: "Click Here.";
            top: 100px;
        }

        input [type="text"],
        [type="text"],
        [type="url"],
        [type="text"],
        [type="tel"],
        [type="email"],
        [type="text"],
        textarea {
            width: 300px;
            height: 50px;
            padding: 5px;
            margin-bottom: 15px;
            border: none;
            text-align: center;
            background-color: #ffffff8a;
            border-radius: 6px;
            color: #000;
            font-size: 17px;
            text-transform: capitalize;
        }

        ::placeholder {
            color: rgb(48, 47, 47);

        }

        input[type="file"] {
            width: 180px;
            height: 150px;
            margin-top: 25px;
            margin-bottom: 15px;
            background: radial-gradient(black, transparent);
            border: 3px dotted black;
            border-radius: 6px;
            text-indent: -9999px;
            cursor: grab;
        }

        textarea {
            line-height: 1.4;
        }

        div.buttons {
            width: 310px;
            margin: auto;
        }

        button.submit,
        button.reset {
            width: 57%;
            padding: 10px;
            border-radius: 6px;
            border: blanchedalmond;
            font-size: 18px;
            font-weight: bold;
            color: #ffff;
            background-color: #146483;

        }

        button.reset {
            width: 36%;
            margin-left: 3%;
        }


        hr.sparetor {
            background: #857f7f70;
            width: 300px;
            height: 4px;
            margin: 20px auto;
            border: none;
            opacity: 1;
        }

        .change-pass .change-pass-label {
            color: #62bedb;
            cursor: pointer;
        }

        .change-pass .change-pass-discrip {
            color: #fff;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        input[type="password"] {
            width: 100%;
            height: 30px;
            padding: 5px;
            margin-bottom: 15px;
            border: none;
            text-align: center;
            background-color: #ffffff8a;
            border-radius: 6px;
            color: #000;
            font-size: 17px;
            text-transform: capitalize;
        }

        div.old {
            width: 300px;
            margin: auto;
            display: none;
        }

        div.old input.old-pass {
            width: 220px;
        }

        div.new {
            width: 300px;
            margin: auto;
            display: none;
        }


        input.verify,
        input.confirm {
            width: 75px;
            padding: 2px;
            border-radius: 6px;
            border: blanchedalmond;
            font-size: 18px;
            font-weight: bold;
            color: #ffff;
            background-color: #146483;
            letter-spacing: 1px;

        }

        input.confirm {
            width: 57%;
            padding: 10px;
        }


        /* start footer style */
        footer.page-foot {
            height: fit-content;
            color: #fff;
            background-color: #282c4ecf;
            padding-top: 25px;
        }

        footer.page-foot div.up {
            width: 100%;
            display: flex;
            text-align: center;

        }

        footer.page-foot div.up div.sub-div-in-foot {
            width: 22%;
            margin: 0 5px;
            padding: 5px 10px;
        }

        footer.page-foot div.up h4.lable {
            color: #62bedb;
        }

        footer.page-foot div.up div.info-about-us h4.l-logo {
            text-transform: uppercase;
            color: #fff;
        }

        footer.page-foot div.up div.info-about-us p {
            font-size: large;
            padding-top: 15px;
        }

        footer.page-foot div.up div.info-communication {
            flex-grow: 1;
        }

        footer.page-foot div.up div.info-communication a {
            display: block;
            color: #ffff;
            font-size: 19px;
            text-decoration: none;
        }

        footer.page-foot div.up div.info-communication a:hover {
            color: black;
            font-weight: bold;
        }

        footer.page-foot div.up div.info-communication a.call-us {
            margin-top: 25px;
            margin-bottom: 10px;

        }

        footer.page-foot div.up div.info-about-jobs div.jobs {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            text-align: center;
            margin-top: 17px;
            padding: 0 10px;
            font-size: 20px;
        }

        footer.page-foot div.up div.following div.our-mail {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 15px 0 7px;
        }

        footer.page-foot div.up div.following div.chanells svg {
            font-size: 27px;
            margin-top: 10px;
        }

        footer.page-foot div.up div.following div.chanells svg.fa-instagram {
            margin-left: 5px;
            margin-right: 5px;
        }

        footer.page-foot div.down {
            background: #9e9e9e4a;
            padding: 15px 0;
            text-align: center;
            font-size: 20px;
        }

        /* end footer style */
    </style>
</head>

<body>

    <!-- start header -->
    <header class="contianer">
        <h1 class="lable">zwena</h1>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../HTML/Home page.php" class="sub-items" target="_blank">Home</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_blank">About</a>
            </li>
            <!-- mesage to user -->
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_blank">
                    <i class="fa-solid fa-envelope"></i>
                    Message
                </a>
            <li class="big-items">
                <a href="../HTML/Arabic-HTML/contact-us-ar.php" class="sub-items" target="_blank">
                    <img src="../../Graduation/image/eg-logo.png" alt="egypt-logo" class="eg-logo">
                    Arabic
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- This will stay "#" because it is not a link. -->
                <a href="#" class="sub-items ">
                    <i class="fa-solid fa-user"></i>
                    user-name
                </a>
                <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item">
                            <i class="fa-solid fa-user"></i>
                            Profil</a>
                    </li>

                    <!-- //**ask group about there opinion**//
                <li class="menu-items">
                    <a href="#" class="sub-manu-item" target="_blank">
                        <i class="fa-solid fa-bell"></i>
                        Notifications</a>
                </li> -->

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
    
    
    <form action="" method="post">

        <h2 class="h2"> Complete Information </h2>
        <br>
        <label for="imge" class="test">Choose a Photo :</label>
        <input type="file" id="logo" name="logo">
        
        <!-- test -->
        <!-- <div class="attachment">
            <input type="file" id="logo" name="logo">
        </div> -->
        <br>
        <label for="name"> Company Name :</label> <br>
        <input type="text" id="name" name="name" placeholder=" Enter Your company name" required>
        <br>
        <br>
        <label for="name"> Email :</label> <br>
        <input type="text" id="name" name="email" placeholder="return Enter Your email" required>
        <br>
        <label for="business_type">Business Tybe :</label> <br>
        <input type="text" id="business_type" name="business_type" placeholder="Identify The Work Type" required>
        <br>
        <label for="website"> Website :</label> <br>
        <input type="url" id="website" name="website" placeholder="Enter Your Website">
        <br>
        <label for="address"> Address :</label> <br>
        <input type="text" id="address" name="address" placeholder="Enter Your Addr" required>
        <br>
        <label for="phone Numper"> Mobile :</label> <br>
        <input type="tel" id="phone" name="phone" maxlength="11" placeholder="Enter  Your Phone Number">
        <br>
        <label for=" Commercial Register"> CR Number :</label> <br>
        <input type="text" id="C R" name="C_R" placeholder="Enter your commercial register" required>
        <br>
        <label for="other_info">Other Information</label> <br>
        <textarea id="other_info" name="other_info" placeholder="Any Other Information"></textarea>
        <br>
        <div class="buttons">
            <button class="submit" name="req" type="submit">Save</button>

            <button class="reset" type="reset">Reset</button>
        </div>
    </form>
    <form action="">
    <hr class="sparetor">
    <div class="change-pass">
        <h4 class="change-pass-label">Change Password.</h4>
        <p class="change-pass-discrip">Do You Want change<br>Your Password?</p>
        <div class="old">
            <label>Old Password:</label><br>
            <input type="password" required class="old-pass">
            <input type="submit" value="Verify" class="verify">
        </div>
        <div class="new">
            <label>New Password:</label><br>
            <input type="password" required>
            <label for="new-pass">Confirm New Password:</label><br>
            <input type="password" required><br>
            <input type="submit" value="Confirm" class="confirm">
        </div>
    </div>
    </form>


    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <h4 class="lable l-foot l-logo">zwena</h4>
                <p class="pref-discrip">Zwena website is not an employment company and provides all its services to
                    those seeking work with special needs for free without paying any fees.</p>
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
    <script src="../../Graduation/JS/bootstrap.bundle.min.js"></script>
</body>

</html>