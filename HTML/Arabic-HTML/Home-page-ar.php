<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
 -->
<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- <link rel="stylesheet" href="../../CSS/Arabic-CSS/Home page-ar.css"> -->
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
    <title>الصفحة الرئيسية</title>
    <!-- intenal style -->
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
        }

        /* text discrip what we do */
        div.about-us p.discription {
            text-align: center;
            top: 30%;
            width: 50%;
            left: 25%;
            color: #fff;
            font-size: 23px;
            font-weight: bold;
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
            font-size: 30px;
            margin-bottom: 0;
        }

        section.first div.features div.sub-features p {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
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
                <a href="../Home page.php" class="sub-items" target="_self">
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

    <!-- start pref about us -->
    <div class="about-us">
        <p class="discription">موقع ذوينا يساعد ذوي الهمم علي إيجاد فرص توظيف و تديب في أماكن و تخصصات متعدددة.
            <br>مساعدة
            الشركات علي تحقيق مسئوليتها المجتميعة من خلال تدريب و توظيف ذوي الهمم في مختلف الوظائف و التخصصات.
        </p>
    </div>
    <!-- End pref about us -->

    <!-- start features -->
    <section class="first">
        <div class="features">
            <div class="sub-features">
                <i class="fa-solid fa-briefcase"></i>
                <h2 class="heading">توظيف</h2>
                <p class="training-discription">
                    مساعدة ذوي الهمم علي إيجاد فرص عمل مناسبة في أماكن متعددة.<br>
                    مساعدة الشركات علي إيجاد أشخاص مؤهلين من
                    ذوي الهمم في مختلف الوظائف بشكل يمكنها من تحقيق أهدافها.
                </p>
            </div>
            <div class="sub-features">
                <i class="fa-solid fa-book-open-reader"></i>
                <h2 class="heading">تدريب</h2>
                <p class="training-discription">
                    تدريب ذوي الهمم علي إكتساب مهارات جديدة في سوق العمل من جهات متعددة.<br>

                    مساعدة الشركات علي إيجاد كوادر مؤهلة من ذوي الهمم لتحقيق دورها تجاة المجتمع.
                </p>
            </div>
        </div>
    </section>
    <!-- end features -->

    <!-- start Register button -->
    <div class="enter">
        <a href="../Arabic-HTML/registration-ar.php" class="button" target="_self">
            <div class="Register-button">
                إنشاء حساب
            </div>
        </a>
        <a href="../Arabic-HTML/login-ar.php" class="button" target="_self">
            <div class="Register-button">
                تسجيل الدخول
            </div>
        </a>
    </div>
    <!-- End Regiter button -->
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

    <!-- ------------------sparator-------------------- -->
    <!-- <script src="../../JS/bootstrap.bundle.min.js"></script> -->
    <script src="../../JS/all.min.js"></script>
</body>

</html>