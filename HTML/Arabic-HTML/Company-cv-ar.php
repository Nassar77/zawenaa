<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Graduation/CSS/all.min.css">
    <link rel="stylesheet" href="../../../../Graduation/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../Arabic/CSS/index-ar.css">
    <title>استكمال البيانات</title>

    <!-- internal style -->
    <style>
        * {
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background-image: url(../../../../Graduation/image/jon-tyson-O7ke8N4kTpQ-unsplash.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            direction: rtl;
        }

        /*  start header style */
        header.contianer {
            width: 100%;
            padding-right: 30px;
            padding-left: 30px;
            background-color: #282c4e;
            color: #fff;
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
            text-align: center;
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

        a.sub-items svg.fa-envelope {
            position: relative;
            top: 4px;
        }

        li.big-items .eg-logo {
            width: 20px;
            height: 15px;
        }

        li.big-items a.sub-items:hover {
            color: black;
        }

        /* 
\\**dropdown menu style**\\
/* \\**i dont this menu here.**\\*/
        li.big-items.with-menu:hover ul.dropdwon-menu {
            display: block;
        }

        ul.dropdwon-menu {
            padding: 0;
            min-width: 150px;
            position: absolute;
            left: 38px;
            top: 57px;
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
            left: 5px;
            top: -20px;
        }

        ul.dropdwon-menu li.menu-items a.sub-manu-item {
            display: block;
            text-decoration: none;
            color: #fff;
            transition: .3s;
            padding: 15px;
        }

        ul.dropdwon-menu li.menu-items a:hover {
            padding-right: 25px;
        }

        ul.dropdwon-menu li.menu-items:not(:last-child) a {
            border-bottom: 1px solid #111111;
        }


        /* end header style */

        /* start Body style */
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
            right: 41%;
        }

        label.test::before {
            content: "لإضافة صورة,";
            top: 65px;
        }

        label.test::after {
            content: "إضغط هنا.";
            top: 100px;
            right: 43%;
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

        /* end Body style */

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
        <h1 class="lable">زاوينه</h1>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../Arabic-HTML/Home-page-ar.php" class="sub-items" target="_blank">الصفحة الرئيسية</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_blank">عن الموقع</a>
            </li>
            <li class="big-items">
                <!-- "#" => page does not completed. -->
                <a href="#" class="sub-items" target="_blank">
                    <i class="fa-solid fa-envelope"></i>
                    رسائل
                </a>
            </li>
            <li class="big-items">
                <a href="../../HTML/forgetpass.php" class="sub-items" target="_blank">
                    <img src="../../../../Graduation/image/EN-logo.png" alt="egypt-logo" class="eg-logo">
                    الإنجليزية
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- Stay "#" because thid is not link -->
                <a href="#" class="sub-items">
                    <i class="fa-solid fa-user"></i>
                    اسم المستخدم
                </a>
                <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_blank">
                            <i class="fa-solid fa-user"></i>
                            حسابك</a>
                    </li>
                    <!-- <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_blank">
                            <i class="fa-solid fa-bell"></i>
                            إشعارات</a>
                    </li> -->
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
    <!-- start Body -->
    <form action="submit.php" method="post">

        <h2 class="h2">استكمال البيانات</h2>
        <br>
        <label for="imge" class="test">صورة الشركة:</label>
        <input type="file" id="logo" name="logo">
        <br>
        <label for="name">اسم الشركة</label> <br>
        <input type="text" id="name" name="name" placeholder="اكتب اسم الشركة المتداول" required>
        <br>
        <label for="business_type">طبيعة عمل الشركة:</label> <br>
        <input type="text" id="business_type" name="business_type" placeholder="اكتب مجال عمل الشركة" required>
        <br>
        <label for="website">الموقع الخاص بالشركة:</label> <br>
        <input type="url" id="website" name="website" placeholder="موقع الشركة علي وسائل التواصل">
        <br>
        <label for="address">عنوان الشركة:</label> <br>
        <input type="text" id="address" name="address" placeholder="عنوان الشركة بالتفصيل" required>
        <br>
        <label for="phone Numper">رقم هاتف الشركة:</label> <br>
        <input type="tel" id="phone" name="phone" placeholder="رقم هاتف الشركةأو الواتس">
        <br>
        <label for="email">البريد الإلكتروني:</label><br>
        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني للاستفسارات" required>
        <br>
        <label for=" Commercial Register">رقم السجل التجاري:</label> <br>
        <input type="text" id="C R" name="C R" placeholder="رقم السجل التجاري" required>
        <br>
        <label for="other_info">معلومات أخري:</label> <br>
        <textarea id="other_info" name="other_info" placeholder="أي معلومات اخري يمكن أن تساعدنا؟"></textarea>
        <br>
        <div class="buttons">
            <button class="submit" type="submit">حفظ</button>

            <button class="reset" type="reset">محو البيانات</button>
        </div>
        <hr class="sparetor">
        <div class="change-pass">
            <h4 class="change-pass-label">تغير كلمة المرور.</h4>
            <p class="change-pass-discrip">هل تريد تغير<br>كلمة المرور الخاصة بك؟</p>
            <div class="old">
                <label>كلمة المرور القديمة:</label><br>
                <input type="password" required class="old-pass">
                <input type="submit" value="تحقق" class="verify">
            </div>
            <div class="new">
                <label>كلمة المرور الجديدة:</label><br>
                <input type="password" required>
                <label for="new-pass">تأكيد كلمة المرور الجديدة:</label><br>
                <input type="password" required><br>
                <input type="submit" value="تأكيد" class="confirm">
            </div>
        </div>

    </form>
    <!-- End Body -->

    <!-- start footer -->
    <footer class="page-foot">
        <div class="up">
            <div class="sub-div-in-foot info-about-us">
                <h4 class="lable l-foot l-logo">zwena</h4>
                <p class="pref-discrip">
                    موقع زاوينه ليس شركة توظيف ويقدم جميع خدماته لراغبي العمل مجاناً دون دفع أي رسوم.</p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">للمعلومات و التواصل</h4>
                <a href="../../HTML/contact-us.php" class="links-foot call-us" target="_blank">اتصل بنا</a>
                <!-- "#" => page does not completed. -->
                <a href="#" class="links-foot policy" target="_blank">الشروط والأحكام</a>
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
    <script src="../../../../Graduation/JS/all.min.js"></script>
</body>

</html>