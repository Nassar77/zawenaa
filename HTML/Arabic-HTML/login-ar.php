<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
 -->
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/all.min.css">
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/normalize.css">
    <link rel="stylesheet" href="../../CSS/Arabic-CSS/all-test-ar.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wdth,wght@62.5..100,100..900&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="../../CSS/Arabic-CSS/login-ar.css"> -->
    <title>تسجيل الدخول</title>
    <!-- internal style -->
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
            right: 117px;
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
            right: 117px;
            top: 12px;
            font-size: 20px;
        }

        ::placeholder {

            text-align: right;
            color: #fff;
            font-size: 18px;
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
            padding-right: 35px;
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
            right: 50px;
        }

        .sperator::before {
            content: "or";
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgb(128, 124, 124);
            color: #ffffffad;
            right: 166px;
            position: absolute;
            text-align: center;
            top: -11px;
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
            display: inline-block;
        }

        .google {
            background-color: rgb(255, 60, 0);
            margin-left: 5px;
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
        <div class="left">
            <img src="../../image/logo.png" alt="zwena logo" class="logo-test">
        </div>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../Arabic-HTML/Home-page-ar.php" class="sub-items" target="_self">الصفحة الرئيسية</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_self">عن الموقع</a>
            </li>
            <li class="big-items">
                <a href="../../HTML/forgetpass.php" class="sub-items" target="_self">
                    <img src="../../image/EN-logo.png" alt="egypt-logo" class="eg-logo">
                    الإنجليزية
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- Stay "#" because thid is not link -->
                <a href="../Arabic-HTML/login-ar.php" class="sub-items">
                    <i class="fa-solid fa-user"></i>
                    تسجيل الدخول
                </a>
            </li>
        </ul>
    </header>
    <!-- end header -->
    <section class="one">
        <article class="log-in">
            <fieldset>
                <form action="#" method="post">
                    <div class="first">
                        <!-- <label for="mail">Email</label> -->
                        <span class="user-icon"> <i class="fa-solid fa-user"></i></span>
                        <input type="email" name="e-mail" id="mail" placeholder=" البريد الإلكتروني" required autofocus>

                    </div>
                    <br>
                    <div class="second">
                        <!-- <label for="pass" class="pass-1">Password</label> -->
                        <span class="lock-icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="pass" name="password" placeholder=" كلمة المرور" required>
                    </div>
                    <br>
                    <div class="buttones">
                        <a class="submit" type="submit" href="#">تسجيل الدخول</a>
                        <a class="register" href="../Arabic-HTML/registration-ar.php" target="_self">إنشاء
                            حساب</a>
                        <a class="forgotpass" href="../Arabic-HTML/forgetpass-ar.php" target="_self">نسيت كلمة
                            المرور؟</a>
                    </div>
                    <span class="sperator"></span>
                    <a class="google" href="https:\\www.google.com">
                        التسجيل من خلال جوجل
                        <img class="google-icon" src="../../image/Google.png">
                    </a>
                    <a class="facebook" href="https:\\www.facebook.com">
                        التسجبل من خلال فيسبوك
                        <img src="../../image/facebook.png" class="facebook-icon">
                    </a>
                </form>
            </fieldset>
        </article>
    </section>
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
    <!-- end footer -->
    <script src="../../JS/bootstrap.bundle.min.js"></script>
    <script src="../../JS/all.min.js"></script>
</body>

</html>