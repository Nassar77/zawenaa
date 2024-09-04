<?php
    session_start();
    echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الوظائف</title>
    <link rel="stylesheet" href="style2.css">
    <style>
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .div1 {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .search {
            background-color: #eee;
            padding: 20px;
            margin-bottom: 20px;
            width: 70%;
        }

        .form-group {
            margin-bottom: 10px;
            direction: rtl;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select,
        input {
            padding: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }

        button {
            padding: 8px 12px;
            background-color: #146483;
            color: #fff;
            border: 1px solid black;
            cursor: pointer;
            margin-left: 850px;
            width: 80px;
            height: 40px;
            font-size: 20px;
        }

        h2 {
            text-align: right;
        }

        .jop0 {
            list-style-type: none;
        }

        .jobs {
            width: 72%;
            padding: 10px;
            list-style-type: none;

        }

        .job {
            border: 1px solid #146483;
            padding: 10px;
            direction: rtl;
            text-align: right;
            font-size: 20px;
        }

        .jp2 {
            color: blue;
        }

        a:hover {
            color: #F00;
            font-weight: bold;
            text-decoration: none;

        }

        .jop-ok {
            background-color: #d1cfcf;
            width: 27%;
            height: 153%;
            position: absolute;
            right: 0;
            top: 188px;
            font-size: large;
            text-align: center;
        }

        .jobs-1 {
            border: 1px solid #146483;
            padding: 10px;
            direction: rtl;
            text-align: right;
            font-size: 20px;
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
    <!-- الديف الاول لكتابة نص توضيحى للصفحة  -->
    <div class="div1">
        <h1>عرض الوظائف</h1>
    </div>

    <!--  الديف الثانى فلتر بحث للبحث عن وظيفة بالمسمى الشائع لها ولتسهيل عملية البحث عن الوظائف
ويتكون من 3 خانات الاولى للبحث من خلال كلمة مفتاحية والثانية عن نوع الوظيفى والثالثة عن الموقع الجغرافى الذى يبحث فيه عن وظيفة تكون قريبة من نطاق المنطقة التى يعيش قيها -->

    <div class="search">
        <h2>فلتر البحث</h2>
        <form action="#">
            <div class="form-group">
                <label for="keyword">كلمة مفتاحية:</label>
                <input type="text" id="keyword" name="keyword" placeholder="أدخل كلمة مفتاحية">
            </div>
            <div class="form-group">
                <label for="category">الفئة:</label>
                <select id="category" name="category">
                    <option value="">جميع الفئات</option>
                    <option value="برمجة">برمجة</option>
                    <option value="تصميم">تصميم</option>
                    <option value=" مدخل بيانات">مدخل بيانات</option>
                    <option value="تسويق">تسويق</option>
                    <option value="محاسبة">محاسبة</option>
                    <option value="خدمة العملاء">خدمة العملاء</option>
                </select>
            </div>
            <div class="form-group">
                <label for="location">الموقع:</label>
                <select id="location" name="location">
                    <option value="">جميع المواقع</option>
                    <option value="القاهرة">القاهرة</option>
                    <option value="الإسكندرية">الإسكندرية</option>
                    <option value="بورسعيد">بورسعيد</option>
                    <option value="الجيزة">الجيزة</option>
                    <option value="المنصورة">المنصورة</option>
                </select>
            </div>
            <button type="submit">بحث</button>
        </form>
    </div>
    <!--  الديف الثالث للوظائف المعلن عنها هنا استخدمت القوائم مراعاة للشكل والترتيب لو فى حاجة افضل ممكن نستبدلها  -->
    <div class="jobs">
        <h2>الوظائف المتاحة</h2>
        <ul class="jop0">
            <li class="job">
                <h3>مهندس برمجيات</h3>
                <p>شركة [اسم الشركة] تبحث عن مهندس برمجيات موهوب للانضمام إلى فريقها.</p>
                <dl class="jp1">
                    <dt>
                        وصف الوظيفة
                    </dt>
                    <dd>التخصص :</dd>
                    <dd>نوع الاعاقة :</dd>
                    <dd>نوع الدوام :</dd>
                </dl>
                <a class="jp2" href="[رابط الوظيفة]">تفاصيل الوظيفة</a>
            </li>
            <li class="job">
                <h3>مصمم جرافيك</h3>
                <p>شركة [اسم الشركة] تبحث عن مصمم جرافيك مبدع للانضمام إلى فريقها.</p>
                <dl class="jp1">
                    <dt>
                        وصف الوظيفة
                    </dt>
                    <dd>التخصص :</dd>
                    <dd>نوع الاعاقة :</dd>
                    <dd>نوع الدوام :</dd>
                </dl>
                <a class="jp2" href="[رابط الوظيفة]">تفاصيل الوظيفة</a>
            </li>
        </ul>
    </div>
    <!-- الديف الرابع للوظائف الى بتكون تم التقديم فيها المفروض دى بتتعمل بالجافا علشان بياخد الوظيفة الى تم التقديم فيها ويستدعيها من الداتا بيز ويعملها تكرار انها تظهر فى الديف المخصص ليها -->
    <div class="jop-ok">
        <p> الوظائف التى تم التقديم فيها </p>
        <br>


        <ul class="jop0">
            <li class="job">
                <h3>مهندس برمجيات</h3>
                <p>شركة [اسم الشركة] تبحث عن مهندس برمجيات موهوب للانضمام إلى فريقها.</p>
                <dl class="jp1">
                    <dt>
                        وصف الوظيفة
                    </dt>
                    <dd>التخصص :</dd>
                    <dd>نوع الاعاقة :</dd>
                    <dd>نوع الدوام :</dd>
                </dl>
                <p> تم التقديم </p>
            </li>
            <li class="job">
                <h3>مصمم جرافيك</h3>
                <p>شركة [اسم الشركة] تبحث عن مصمم جرافيك مبدع للانضمام إلى فريقها.</p>
                <dl class="jp1">
                    <dt>
                        وصف الوظيفة
                    </dt>
                    <dd>التخصص :</dd>
                    <dd>نوع الاعاقة :</dd>
                    <dd>نوع الدوام :</dd>
                </dl>
                <p>تم التقديم </p>
            </li>
        </ul>

    </div> <!-- start footer -->
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


</body>

</html>