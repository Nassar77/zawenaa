<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs registration</title>
    <link rel="stylesheet" href="../registration/max.css">
</head>

<body>

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
                </li>
                <li class="big-items">
                    <a href="../HTML/Arabic-HTML/Home-page-ar.php" class="sub-items" target="_blank">
                        <img src="../image/eg-logo.png" alt="egypt-logo" class="eg-logo">
                        Arabic
                    </a>
                </li>
                <li class="big-items with-menu">
                    <!-- This will stay "#" because it is not a link. -->
                    <a href="#" class="sub-items ">
                        <i class="fa-solid fa-user"></i>
                        user-name
                    </a>
                    <!-- i dont need this menu in this page.  -->
                    <!-- 
                      <ul class="dropdwon-menu">
                      <li class="menu-items">
                          <a href="#" class="sub-manu-item" target="_blank">
                              <i class="fa-solid fa-user"></i>
                              Profil</a>
                      </li>
                       //**ask group about there opinion**//
                      <li class="menu-items">
                          <a href="#" class="sub-manu-item" target="_blank">
                              <i class="fa-solid fa-bell"></i>
                              Notifications</a>
                      </li>
                      <li class="menu-items">
                          <a href="#" class="sub-manu-item">
                              <i class="fa-solid fa-person-running"></i>
                              Log out</a>
                      </li>
                  </ul> 
              -->
                </li>
            </ul>
        </header>
        <!-- start Body -->
        <form action="submit.php" method="post">

            <h2 class="h2"> Add a job or training</h2>
            <br>
            <!-- <label for="imge" class="test">صورة الشركة:</label>
    <input type="file" id="logo" name="logo"> -->
            <br>
            <label for="name"> Company Name</label> <br>
            <input type="text" id="name" name="name" placeholder="name of the trading company" required>
            <br>
            <label for="name" class="label"> service type</label>
            <br>
            <div class="radiohome">
                <div class="radio1">
                    <input id="train" type="radio" name="training" value="training">
                    <label for="train" class="label">training</label>
                </div>

                <div class="radio1">
                    <input id="empl" type="radio" name="training" value="employment">
                    <label for="empl" class="label">employment</label>
                </div>
            </div>
            <br>
            <label for="other_info"> Service description:</label> <br>
            <textarea id="other_info" name="other_info" placeholder="Service description  "></textarea>
            <br>
            <label for="business_type">Required profession :</label> <br>
            <input type="text" id="business_type" name="business_type" placeholder="  Enter the desired specialty"
                required>
            <br>
            <label for="Qalification"> Qualification</label>
            <br>
            <select name="Qalification" id="Qalification" class="select1" required>
                <option value=" High ">High </option>
                <option value="  Above average "> Above average </option>
                <option value=" intermediate"> intermediate</option>
                <option value="Preparatory ">Preparatory </option>
                <option value="Primary">Primary</option>
                <option value=" without a degree"> without a degree </option>
            </select>
            <br>
            <label for="Type of Disability"> Type of Disability</label>
            <br>
            <select class="select1" name="type of disability" required>
                <option value="Mental Retardation">Mental Retardation</option>
                <option value="Hearing impairmen">Hearing impairmen</option>
                <option value="impairment Visua">impairment Visual</option>
                <option value="Physical impairment">Physical impairment</option>
                <option value="Emotional impairmen">Emotional impairment</option>
                <option value="Autism"> Autism</option>
                <option value="Learing Disabilities">Learing Disabilities</option>
                <option value="Speech and eheart Disorders">Speech and eheart Disorders</option>
                <option value="other">other</option>
                <!-- <br>
        <textarea id="other_info" name="other_info" placeholder="type your disability"></textarea> -->
            </select>
            <br>
            <label for="other_info"> description of disability:</label> <br>
            <textarea id="other_info" name="other_info" placeholder="type of disability   "></textarea>
            <br>
            <label for="Number"> work hours:</label><br>
            <input type="text" id="number" name="number" placeholder="  Write business hours">
            <br>
            <label for="address">Company Address :</label> <br>
            <input type="text" id="address" name="address" placeholder="Company Address  " required>
            <br>
            <label for="phone Numper"> Company phone number:</label> <br>
            <input type="tel" id="phone" name="phone" placeholder="   Company phone number" required>
            <br>
            <!-- <label for="email">البريد الإلكتروني:</label><br>
    <input type="email" id="email" name="email" placeholder="البريد الإلكتروني للاستفسارات" required> -->
            <!-- <label for=" Commercial Register">رقم السجل التجاري:</label> <br>
    <input type="text" id="C R" name="C R" placeholder="رقم السجل التجاري" required> -->
            <br>
            <label for="other_info"> other information:</label> <br>
            <textarea id="other_info" name="other_info" placeholder="other information    "></textarea>
            <br>
            <div class="buttons">
                <button class="submit" type="submit"> Add a job or training</button>

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