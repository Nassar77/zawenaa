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
    <link rel="stylesheet" href="../../CSS/Arabic-CSS/all-test-ar.css">
    <!-- <link rel="stylesheet" href="../../CSS/Arabic-CSS/Registration-ar.css"> -->
    <title>إنشاء حساب</title>
    <!-- internal style -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/

        /* start form */
        /* fieldset {
            width: 300px;
            margin: -3px auto;
            box-shadow: 1px 1px 1px 1px #9e9e9e6b, 1px 1px 1px 1px #9e9e9e6b;
            background-color: #8080809c;
        } */
        fieldset {
            width: 373px;
            margin: 25px auto;
            box-shadow: 1px 1px 1px 1px #9e9e9e6b, 1px 1px 1px 1px #9e9e9e6b;
            background-color: #808080bf;
            padding: 15px 41px;
            border-radius: 6px;
        }


        label {
            text-transform: capitalize;

            font-size: 22px;
            font-weight: bold;
        }

        input {
            display: block;
            width: 300px;
            height: 30px;
            padding-right: 15px;
            margin-bottom: 10px;
            margin-top: 4px;
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
            width: 150px;
            padding-right: 35px;
        }

        div.major input {
            width: 100px !important;
            height: 22px !important;
            margin-right: -35px !important;
        }

        div.major #company {
            position: relative;
            left: -80px;
        }

        div.major label {
            width: 50px;
            margin-right: -10px;
            margin-top: -6px;
            font-size: 27px;
        }

        .company {
            position: relative;
            left: -83px;
        }

        label+span {
            color: red;
        }

        .google,
        .facebook {
            text-decoration: none;
            color: #fff;
            text-align: center;
            margin-top: 7px;
            margin-right: 5px;
            width: 295px;
            display: block;
            margin-bottom: 3px;
            border-radius: 4px;
            font-size: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
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
            top: -2px;
        }

        .facebook-icon {
            left: -8px;
        }

        .submit {
            border: none;
            width: 179px;
            background: #000000e3;
            color: #fff;
            border-radius: 4px;
            display: inline-block;
            margin-right: 4px;
        }

        .reset {
            border: none;
            width: fit-content;
            font-size: 15px;
            background: #272626;
            color: #fff;
            border-radius: 4px;
            display: inline-block;
        }

        .back-to-login {
            background-color: #ffffff96;
            text-align: center;
            margin-bottom: 3px;
            margin-right: 5px;
            border-radius: 4px;
            font-size: 18px;
            padding-top: 5px;
            padding-bottom: 5px;
            width: 295px;
            display: block;
            font-weight: bold;
        }

        .login-page {
            text-decoration: none;
            color: #504f4f;
            font-size: 15px;
            margin-left: -20px;
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
                <a href="../../HTML/registration.php" class="sub-items" target="_self">
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
    <!-- start form -->
    <fieldset>
        <form action="#" target="_self">
            <div class="user-name">
                <label for="f-name">اسم المستخدم:</label>
                <span>*</span>
                <input type="text" id="f-name" required maxlength="35" accept="charset" name="f-name">
            </div>
            <div class="e-mail">
                <label for="mail">البريد الإلكتروني:</label>
                <span>*</span>
                <input type="email" id="mail" name="email" required>
            </div>
            <div class="password">
                <label for="pass-1">كلمة المرور:</label>
                <span>*</span>
                <input type="password" id="pass-1" name="pass" required accept="charset, number, sembol">
                <label for="pass-2">تأكيد كلمة المرور:</label>
                <span>*</span>
                <input type="password" id="pass-2" name="pass" required accept="charset, number, sembol">
            </div>


            <div class="major">
                <input type="radio" name="major" id="employment">
                <label for="employment">موظف</label>
                <input type="radio" name="major" id="company">
                <label for="company" class="company">شركة</label>
            </div>
            <!-- WE dont need these files now -->
            <!--
           <div class="identfire">
                <label for="id">رقم بطاقة الخدمات المتكاملة</label>
                <span>*</span>
                <input type="text">
                <p class="ask-id">if you donot have this number <a href="#" id="identfier">Click Here</a></p>
            </div>
            <div class="photo">
                <label for="photo">الصورة</label>
                <input id="photo" type="file">
            </div> -->
            <!-- WE dont need these files now -->
            <input type="submit" value="إنشاء حساب" class="submit">
            <input type="reset" value="مسح البيانات" class="reset">
            <span class="back-to-login">لديك حساب بالفعل؟
                <a class="login-page" href="../../HTML/Arabic-HTML/login-ar.php">
                    تسجيل الدخول</a></span>
            <a class="google" href="https:\\www.google.com">
                التسجيل من خلال جوجل
                <img class="google-icon" src="../../image/Google.png">
            </a>
            <a class="facebook" href="https:\\www.facebook.com">
                التسجيل من خلال فيسبوك
                <img src="../../image/facebook.png" class="facebook-icon">
            </a>
        </form>
    </fieldset>
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
    <script src="../../JS/all.min.js"></script>
</body>

</html>