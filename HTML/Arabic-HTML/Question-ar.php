<!DOCTYPE html>
<html lang="en">

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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title> إختبار سريع</title>
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


        .one1 {
            color: #62bedb;
            font-size: 50px;
            font-weight: bold;
            text-align: center;

        }

        .two2 {
            color: #fff !important;
            font-weight: bold !important;
            font-size: 20px !important;
            margin-bottom: -12px !important;
            margin-top: 20px !important;
        }

        .three3 {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        hr {
            opacity: 1 !important;
            color: #fff !important;
        }

        label {
            color: #ffffff;
            display: inline;
            font-weight: bold;
            font-size: 22px;
        }

        input {
            background-color: #bfbabaa3 !important;
            color: #fff !important;
            width: 440px !important;
            height: 60px !important;
            font-size: 20px !important;
            margin-bottom: 30px !important;
            padding-top: 5px !important;
            padding-right: 15px !important;
            border-radius: 6px !important;
            border: none !important;
            outline: none !important;
            margin: auto !important;
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
            <li class="big-items  with-message">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_self">
                    <i class="fa-solid fa-envelope"></i>
                    رسائل
                </a>
                <!--start test message to user -->
                <ul class="dropdwon-menu message">
                    <li class="menu-items">
                        <p class="message-to-user">لا يوجدرسائل جديدة.</p>
                    </li>
                </ul>
                <!--end test message to user -->
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
                <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_self">
                            <i class="fa-solid fa-user"></i>
                            حسابك</a>
                    </li>
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item">
                            <i class="fa-solid fa-person-running"></i>
                            تسجيل الخروج</a>
                    </li>
                </ul>

            </li>
        </ul>
    </header>
    <!-- end header -->

    <form action="submit.php" method="post">

        <h2 class="one1"> الاسئلة </h2>
        <br>
        <div class="three3">
            من فضلك قم بالإجابة علي الاسئلة التالية
        </div>
        <hr>
        <br>
        <form name="feedback_form" id="feedback_form" method="post">

            <div class="Quastion">
                <h3 class="two2"> ما الذي يؤهلك لتولي الوظيفة؟</h3>
                <br>
                <input class="form-control" required placeholder="اجب هنا " name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2"> ماذا تعلم عن الشركة؟</h3>
                <br>
                <input class="form-control" required placeholder="اجب هنا" name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2"> ما هي أهدافك في حياتك المهنية؟</h3>
                <br>
                <input class="form-control" required placeholder=" اجب هنا " name="comments"></input>
            </div>
            <div class="Quastion">
                <h3 class="two2"> كم من الوقت تحتاجه قبل أن تبدأ بالإسهام في الشركة؟</h3>
                <br>
                <input class="form-control" required placeholder=" اجب هنا " name="comments"></input>
            </div>
            <br>
            <div class="button"><a href="#"></a> إرسال </a></div>


        </form>
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