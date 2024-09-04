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
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wdth,wght@62.5..100,100..900&display=swap"
        rel="stylesheet">
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="../../CSS/Arabic-CSS/forgetpass-ar.css"> -->
    <link rel="stylesheet" href="../../CSS/Arabic-CSS/all-test-ar.css">
    <title>إعادة تعيين كلمة المرور</title>
    <!-- internal style -->
    <style>
        /* 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
*/

        /*start fieldset style  */
        fieldset {
            width: 600px;
            border-color: transparent;
            background-color: #00000087;
            border-radius: 28px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 30px auto;
            text-align: center;
            color: #fff;
        }

        /*end fieldset style  */

        /*strat main icon style */
        svg.fa-lock {
            color: black;
            background-color: #eeeeee70;
            font-size: 60px;
            width: 100px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        /*end main icon style */

        /* start massage to user style */

        /* start h3 style */
        h3 {
            text-transform: capitalize;
            font-weight: bold;
        }

        /* end h3 style */
        /* end massage to user style */

        /* start options style */

        /* option style */

        div.options div.option {
            width: 345px;
            border-radius: 6px;
            background-color: #dddddd80;
            margin: auto;
            margin-bottom: 10px;
            color: black;
        }

        /* label style */
        div.options div.option label.email-label {
            font-size: 22px;
            text-transform: capitalize;
        }

        /* icon style */
        div.option svg {
            font-size: 18px;
            color: black;
        }

        /*pragraphe style  */
        div.options div.option p.discrip {
            padding-right: 30px;
        }

        div.options input.send-code {
            width: 175px;
            padding: 10px;
            outline: none;
            border: none;
            margin-bottom: 10px;
            background: #146483;
            color: #ffff;
            margin-top: -5px;
            border-radius: 6px;
        }

        /* end options style */


        /* start verification code style */
        div.write-code {
            width: 300px;
            margin: auto;
            display: none;
        }

        div.write-code label.verfiy-label {
            font-size: 20px;
            font-weight: bold;
        }

        div.write-code p.discrip {
            margin-bottom: 3px;
            margin-bottom: 3px;
            margin-top: -4px;
            font-size: 14px;
        }

        div.write-code input.verification-code {
            width: 220px;
            border-radius: 6px;
            box-shadow: 2px 2px 0 0 #4d494996, -2px 2px 0 0 #4d494996;
            outline: none;
            padding: 3px 5px;
            margin-bottom: 10px;
            background: #ffffff80;
            font-size: 20px;
            text-align: center;
        }

        div.write-code input.verify {
            width: 75px;
            padding: 7px;
            margin-top: 5px;
            border: none;
            margin-bottom: 10px;
            background: #146483;
            color: #ffff;
            border-radius: 6px;
        }

        /* End verification code style */

        /*start  reset password input style */
        div.reset-password {
            width: 300px;
            margin: auto;
            display: none;
        }

        div.reset-password div.new-pass label.n-pass {
            font-size: 18px;
            font-weight: bold;
        }

        div.reset-password div.new-pass input {
            width: 300px;
            border-radius: 6px;
            box-shadow: 2px 2px 0 0 #4d494996, -2px 2px 0 0 #4d494996;
            outline: none;
            padding: 5px;
            margin-bottom: 10px;
            background: #ffffff80;
            font-size: 20px;
        }

        div.reset-password input.confirm-pass {
            width: 175px;
            padding: 10px;
            margin-top: 5px;
            border: none;
            margin-bottom: 10px;
            background: #146483;
            color: #ffff;
            border-radius: 6px;
        }

        /*end reset password input style */
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
    <!-- start form to reset password -->
    <section>
        <article>
            <fieldset>
                <!-- main icon -->
                <i class="fa-solid fa-lock"></i>
                <!--start massage to user -->
                <div class="hint">
                    <h3 class="ask-user">نسيت كلمة المرور؟</h3>
                    <p class="help-user">لا تقلق!،سوف نساعدك علي<br>استرجاع كلمة المرور</p>
                </div>
                <!--End massage to user -->

                <!-- start forme reset password -->
                <form action="#" method="post">
                    <!--start first option  -->
                    <!-- user must select one option -->
                    <div class="options">
                        <!-- option one: send code to user by his email -->
                        <div class="email option">
                            <input type="radio" name="option" id="email">
                            <label for="email" class="email-label">الإرسال إلي بريدك الإلكتروني</label>
                            <i class="fa-solid fa-envelope"></i>
                            <p class="discrip">سيتم إرسال رابط إعادة تعين كلمة المرور<br> علي بريدك الإلكتروني</p>
                        </div>
                        <!--end first option  -->
                        <!--start second option  -->
                        <!-- option one: send code to user by his phone number -->
                        <div class="phone option">
                            <input type="radio" name="option" id="phone">
                            <label for="phone" class="email-label">الإرسال إلي هاتفك</label>
                            <i class="fa-solid fa-phone"></i>
                            <p class="discrip">سيتم إرسال كود التحقق في <br>رسالة SMS إلي هاتفك</p>
                        </div>
                        <!--end second option  -->
                        <!-- user click her to recive code; 
                        after he click it div "reset-password" will be show
                         -->
                        <input type="submit" class="send-code" name="send-code" value="أرسل الكود">
                    </div>
                    <!-- This div will be hidden, 
                        when user select a proper option and click send code it will be showen. 
                    -->
                    <div class="write-code">
                        <label class="verfiy-label">كود التحقق:</label><br>
                        <p class="discrip">الكود لاذي استلتمه علي الإيميل أو الهاتف.</p>
                        <input type="text" class="verification-code" name="verification-code" required minlength="4"
                            maxlength="4">
                        <input type="submit" name="verify" class="verify" value="تحقق">
                    </div>

                    <!-- 
                        This div wil be hidden, when user write verify-code and click verify,
                        this div will be showen
                     -->
                    <div class="reset-password">
                        <!-- here user write a new password from 10 - 20 letrer or number  -->
                        <div class="new-pass">
                            <label sall.min.jsclass="n-pass">كلمة المرور الجديدة:</label><br>
                            <input type="password" name="pass" required minlength="10" maxlength="20">
                        </div>
                        <!-- here user will repeat password to confit=rm it befor send it. -->
                        <div class="new-pass">
                            <labelsall.min.js class="n-pass">تأكيد كلمة المرور:</label><br>
                                <input type="password" name="pass" required minlength="10" maxlength="20">
                        </div>
                        <!-- when user click here a new password will send and save in database -->
                        <input type="submit" name="submit" class="confirm-pass" value="إرسال">
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
    <!-- -------------------sperator----------------- -->
    <script src="../../JS/all.min.js"></script>
</body>

</html>