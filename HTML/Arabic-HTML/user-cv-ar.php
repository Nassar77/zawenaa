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
    <title>استكمال التسجيل للمستخدم</title>

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
        select,
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

        select {
            display: block;
            margin: 10px auto;
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
    </style>
</head>

<body dir="rtl">


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

        <h2 class="h2"> C.V </h2>
        <hr>
        <br>
        <label for="imge" class="test">اختر صوره</label>
        <input type="file" id="logo" name="logo">
        <!-- test -->
        <!-- <div class="attachment">
            <input type="file" id="logo" name="logo">
        </div> -->
        <br>
        <label for="name">الاسم كامل</label> <br>
        <input type="text" id="name" name="name" placeholder="من فضلك ادخل الاسم كامل " required>
        <br>
        <label for="business_type"> تاريخ الميلاد </label> <br>
        <input type="date" id="date" name="bdate" placeholder="من فضلك ادخل تاريخ الميلاد كامل" required>
        <br>
        <label for="website">البريد الاكتروني </label> <br>
        <input type="email" id="website" name="website" placeholder="من فضلك ادخل البريد الاكتروني">
        <br>
        <label for="address">رقم الهاتف </label> <br>
        <input type="text" id="address" name="address" placeholder="من فضلك ادخل رقم الهاتف" required>
        <br>
        <label for="phone Numper"> العنوان</label> <br>
        <input type="tel" id="phone" name="phone" placeholder="من فضلك ادخل العنوان">
        <br>
        <label for="email"> الرقم القومي</label><br>
        <input type="text" id="email" name="email" placeholder="من فضلك ادخلال الرقم القومي" required>
        <br>
        <label for=" Commercial Register"> بطاقه الخدمات الصحيه</label> <br>
        <input type="text" id="C R" name="C R" placeholder="من فضلك ادخل بطاقه الخدمات الصحيه" required>
        <br>
        <label>نوع الاعاقه</label> <br>

        <select class="dis" name="نوع الاعاقه" required>
            <option value="التأخر العقلي">التأخر العقلي</option>
            <option value="ضعاف السمع">ضعاف السمع</option>
            <option value="الإعاقة البصرية">الإعاقة البصرية</option>
            <option value="الإعاقة الجسدية">الإعاقة الجسدية</option>
            <option value="الضعف العاطفي">الضعف العاطفي</option>
            <option value="توحد"> توحد</option>
            <option value="صعوبات التعلم">صعوبات التعلم</option>
            <option value="اضطرابات النطق والقلب">اضطرابات النطق والقلب</option>
            <option value="اخري">اخري</option>
            <textarea id="other_info" name="other_info"
                placeholder="اذا كانت الاجابه اخري اكتب نوع الاعاقه او اية تفاصيل اخري"></textarea>
        </select><br>
        <label>المؤهل</label><br>

        <select name="المؤهل" required>
            <option value="بدون مؤهل">بدون مؤهل </option>
            <option value="ابتدائي">ابتدائي</option>
            <option value="اعدادي">اعدادي</option>
            <option value="متوسط">متوسط</option>
            <option value="فوق المتوسط">فوق المتوسط</option>
            <option value="عالي">عالي</option>
            <option value="اخري">اخري</option>
            <textarea placeholder="اذا كانت الاجابه اخري اكتب نوع المؤهل او اية تفاصيل اخري" rows="2"
                cols="30"></textarea><br>

        </select><br>
        <label>الخبرات السابقه</label><br><br>
        <textarea placeholder="اكتب اية خبرات تم اكتسابها"></textarea><br><br>
        <label>الدورات التدريبيه</label><br><br>
        <textarea placeholder="اكتب الدورات التدريبيه التي تم الحصول عليها"></textarea><br>
        <div class="buttons">
            <button class="submit" type="submit">حفظ</button>

            <button class="reset" type="اعاده ضبط">اعاده ضبط</button>
        </div>
        <hr class="sparetor">
        <div class="change-pass">
            <h4 class="change-pass-label">تغيير كلمه السر؟</h4><br>

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