<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign.css">
    <title>sign in</title>
</head>
<body>
    <header class="contianer">
        <h1 class="lable">زاوينا</h1>
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
                <a href="../Home page.php" class="sub-items" target="_blank">
                    <img src="../../image/EN-logo.png" alt="egypt-logo" class="eg-logo">
                    الإنجليزية
                </a>
            </li>
            <li class="big-items with-menu">
                <!-- Stay "#" because thid is not link -->
                <a href="#" class="sub-items">
                    <i class="fa-solid fa-user"></i>
                    اسم المستخدم
                </a>
                <!-- i dont need this menu in this page.  -->
                <!--   -->
                <ul class="dropdwon-menu">
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_blank">
                            <i class="fa-solid fa-user"></i>
                            حسابك</a>
                    </li>
                    //**ask group about there opinion**//
                    <li class="menu-items">
                        <a href="#" class="sub-manu-item" target="_blank">
                            <i class="fa-solid fa-bell"></i>
                            إشعارات</a>
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
    <!-- start Body -->
    <form action="submit.php" method="post">

        <h2 class="h2">اضافه وظيفه/تدريب</h2>
        <br>
        <!-- <label for="imge" class="test">صورة الشركة:</label>
        <input type="file" id="logo" name="logo"> -->
        <br>
        <label for="name">اسم الشركة</label> <br>
        <input type="text" id="name" name="name" placeholder="اكتب اسم الشركة المتداول" required>
        <br>
        <label for="name">نوع الخدمه</label>
        <br>
        <div class="radiohome">
            <div class="radio1">
                <input id="train" type="radio" name="تدريب" value="تدريب">        
                <label for="train" class="label">تدريب</label>
                </div>
        
                <div class="radio1">
                <input id="empl" type="radio" name="تدريب" value="توظيف">
                <label for="empl" class="label">توظيف</label>
                </div>
        </div>
        <br>
        <label for="other_info">وصف الخدمه:</label> <br>
        <textarea id="other_info" name="other_info" placeholder="صف الخدمه"></textarea>
        <br>
        <label for="business_type">التخصص المطلوب:</label> <br>
        <input type="text" id="business_type" name="business_type" placeholder="اكتب التخصص المطلوب" required>
        <br>
        <label for="Qalification"> الموهل العلمى</label>
        <br>
        <select name="Qalification" id="Qalification" class="select1" required>
        <option value="مؤهل عالى">مؤهل عالى</option>
        <option value="مؤهل فوق متوسط">مؤهل فوق متوسط</option>
        <option value="مؤهل متوسط">مؤهل متوسط</option>
        <option value="اعداديه">اعداديه</option>
        <option value="ابتدائيه">ابتدائيه</option>
        <option value="بدون موهل"> بدون مؤهل</option>
    </select>
        <br>
        <label for="text">نوع الاعاقه :</label> <br>
        <input type="text" id="name" name="Type of Disability" placeholder="اكتب نوع الاعاقه المطلوب" required>
        <br>
        <label for="Number">ساعات العمل:</label><br>
        <input type="text"  id="number" name="number" placeholder="اكتب وقت العمل">
        <br>
        <label for="address">عنوان الشركة:</label> <br>
        <input type="text" id="address" name="address" placeholder="عنوان الشركة بالتفصيل" required>
        <br>
        <label for="phone Numper">رقم هاتف الشركة:</label> <br>
        <input type="tel" id="phone" name="phone" placeholder="رقم هاتف الشركةأو الواتس" required>
        <br>
        <!-- <label for="email">البريد الإلكتروني:</label><br>
        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني للاستفسارات" required> -->
        <!-- <label for=" Commercial Register">رقم السجل التجاري:</label> <br>
        <input type="text" id="C R" name="C R" placeholder="رقم السجل التجاري" required> -->
        <br>
        <label for="other_info">معلومات أخري:</label> <br>
        <textarea id="other_info" name="other_info" placeholder="اى معلومات اخرى عن الوظيفه"></textarea>
        <br>
        <div class="buttons">
            <button class="submit" type="submit">اضافه وظيفه/تدريب</button>

            <!-- <button class="reset" type="reset">محو البيانات</button> -->
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