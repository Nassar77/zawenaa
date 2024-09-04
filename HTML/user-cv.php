<?php
    require_once '../php/user_cv.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap File -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Fontawesom File -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Render all Elemants Normally  -->
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="stylesheet" href="../CSS/all-test.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Company Registration Page</title>

    <!-- internal style -->
    <style>
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

        #date {
            width: 47%;
            height: 50px;
            padding: 5px;
            margin-bottom: 15px;
            margin-top: -13px;
            border: none;
            text-align: center;
            background-color: #ffffff8a;
            border-radius: 6px;
            color: #000;
            font-size: 17px;
            text-transform: capitalize;
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
            text-align: center;
            position: relative;
            font-weight: bold;
            font-size: 22px;
            text-transform: capitalize;
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
            top: 100px;
        }

        label.test::after {
            content: "Click Here.";
            top: 130px;
        }

        input [type="text"],
        [type="text"],
        [type="url"],
        [type="text"],
        [type="tel"],
        [type="email"],
        [type="text"],
        [type="password"],
        select,
        textarea {
            width: 300px;
            height: 50px;
            padding: 5px;
            margin-bottom: 30px;
            border: none;
            text-align: center;
            background-color: #ffffff8a;
            border-radius: 6px;
            color: #000;
            font-size: 17px;
            text-transform: capitalize;
            margin-top: -13px;
        }

        ::placeholder {
            color: rgb(48, 47, 47);

        }

        select {
            display: block;
            margin: -12px auto 7px;
            width: 300px;

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
            line-height: 2.2;
            margin-top: 0;
            margin-bottom: 0;
        }

        textarea.end {
            margin-top: -33px;
            margin-bottom: 0;
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
            font-size: 20px;
            font-weight: bold;
            color: #ffff;
            background-color: #146483;
            letter-spacing: 1px;
            margin-top: 12px;

        }

        button.reset {
            width: 36%;
            margin-left: 3%;
        }


        hr {
            background: #ffffff63 !important;
            height: 2px;
            width: 500px;
            margin: 20px auto;
            opacity: 1 !important;
        }

        .change-pass .change-pass-label {
            color: #62bedb;
            cursor: pointer;
        }

        .change-pass .change-pass-discrip {
            color: #fff;
            margin-top: -7px;
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
        
        #pas {
            width: 300px;
            height: 50px;
            padding: 5px;
            margin-bottom: 30px;
            border: none;
            text-align: center;
            background-color: #ffffff8a;
            border-radius: 6px;
            color: #000;
            font-size: 17px;
            text-transform: capitalize;
            margin-top: -13px;
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
            padding-top: 5px;
            padding-bottom: 5px;

        }

        input.confirm {
            width: 57%;
            padding: 10px;
            font-size: 20px;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <!-- start header -->
    <header class="contianer">
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
                <a href="../HTML/Arabic-HTML/contact-us-ar.php" class="sub-items" target="_blank">
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

        <h2 class="h2"> C.V </h2>
        <hr>
        <br>
        <label for="imge" class="test">Choose a Photo :</label>
        <input type="file" id="logo" name="logo">
        <!-- test -->
        <!-- <div class="attachment">
            <input type="file" id="logo" name="logo">
        </div> -->
        <br>
        <label for="name">enter your name :</label> <br>
        <input type="text" id="name" name="name" placeholder="please Enter Your Name" required>
        <br>
        <label for="business_type"> enter your birthy date :</label> <br>
        <input type="date" id="date" name="birth" placeholder="please enter your date" required>
        <br>
        <label for="website">enter your email :</label> <br>
        <input type="email" id="website" name="email" placeholder="return Enter Your email">
        <br>
        <label for="pas">enter your password :</label> <br>
        <input type="password" id="pas" name="pas" placeholder=" Enter Your password">
        <br>
        <label for="address">enter your phone :</label> <br>
        <input type="text" id="address" name="phone" placeholder="Enter Your Addr" required>
        <br>
        <label for="phone Numper"> enter your address :</label> <br>
        <input type="tel" id="phone" name="address" placeholder="Enter  Your address">
        <br>
        <label for="email"> enter your id :</label><br>
        <input type="text" id="email" name="id" placeholder="Enter Your id" required>
        <br>
        <label for=" Commercial Register"> enter your isc :</label> <br>
        <input type="text" id="C R" name="isc" placeholder="Enter your isc" required>
        <br>
        <label>type of disability</label> <br>

        <select class="dis" name="type_of_disability" required>
            <option value="Mental Retardation">Mental Retardation</option>
            <option value="Hearing impairmen">Hearing impairmen</option>
            <option value="impairment Visua">impairment Visual</option>
            <option value="Physical impairment">Physical impairment</option>
            <option value="Emotional impairmen">Emotional impairment</option>
            <option value="Autism"> Autism</option>
            <option value="Learing Disabilities">Learing Disabilities</option>
            <option value="Speech and eheart Disorders">Speech and eheart Disorders</option>
            <option value="other">other</option>
        </select>
        <textarea id="other_info" name="other_info" placeholder="type your disability"></textarea><br>
        <label>qualification</label><br>

        <select name="qualification" required>
            <option value="without a degree">without a degree</option>
            <option value="primary">primary</option>
            <option value="preparatory">preparatory</option>
            <option value="intermediate">intermediate</option>
            <option value="above average">above average</option>
            <option value="high">high</option>
            <option value="other">other</option>
        </select>
        <textarea placeholder="qualification" name="dis_qual" rows="2" cols="30"></textarea><br>
        <br>
        <label>optained training</label><br><br>
        <textarea placeholder="training courses" name="optained_training" class="end"></textarea><br><br>
        <label>optained courses</label><br><br>
        <textarea placeholder="prior experiences" name="courses" class="end"></textarea><br>
        <div class="buttons">
            <button class="submit" name="submit" type="submit">Save</button>

            <button class="reset" type="reset">Reset</button>
        </div>
        
    </form>

    <form action="">
    <hr class="sparetor">
        <div class="change-pass">
            <h4 class="change-pass-label">Change Password.</h4><br>
            <p class="change-pass-discrip">Do You Want change<br>Your Password?</p>
            <div class="old">
                <label>Old Password:</label>
                <input type="password" required class="old-pass">
                <input type="submit" value="Verify" class="verify">
            </div>
            <div class="new">
                <label>New Password:</label>
                <input type="password" required>
                <label for="new-pass">Confirm New Password:</label>
                <input type="password" required>
                <input type="submit" value="Confirm" class="confirm">
            </div>
        </div>
    </form>

    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <!-- <h4 class="lable l-foot l-logo">zwena</h4> -->
                <img src="../../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">
                    تقدم خدمات راغبي التدريب أو العمل من ذوي الهمم أو كلاهما.</p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">للمعلومات و التواصل</h4>
                <a href="../../HTML/contact-us.php" class="links-foot call-us" target="_self">اتصل بنا</a>
                <!-- "#" => page does not completed. -->
                <a href="#" class="links-foot policy" target="_self">الشروط والأحكام</a>
            </div>
            <div class="sub-div-in-foot info-about-jobs">
                <h4 class="lable l-foot">وظائف حسب المجال</h4>
                <div class="jobs">
                    <div class="sub-job">محاسبة</div>
                    <div class="sub-job">إدارة</div>
                    <div class="sub-job" style="    grid-column-start: 1;
                        grid-column-end: 3;">شئون إدارية</div>
                    <div class="sub-job">تسويق</div>
                    <div class="sub-job">مبيعات</div>
                    <div class="sub-job" style="    grid-column-start: 1;
                        grid-column-end: 3;">مؤهلات عليا</div>
                    <div class="sub-job">حاسب ألي</div>
                    <div class="sub-job">فنيين</div>
                    <div class="sub-job">عمال</div>
                    <div class="sub-job">أخري</div>
                </div>
            </div>
            <div class="sub-div-in-foot following">
                <h4 class="lable l-foot follow-us">تابعنا</h4>
                <div class="our-mail">@Zwena</div>
                <div class="chanells">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="end-foot">جميع الحقوق محفوظة لشركة زاوينه 2024 &copy;</div>
        </div>
    </footer>
    <!--end footer -->
    <script src="../../JS/bootstrap.bundle.min.js"></script>
    <script src="../../JS/all.min.js"></script>
</body>

</html>