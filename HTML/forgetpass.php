<!-- 
    Graduation project 2024
    Supervision: Dr.Sona
    Created by: Ahmed Saber
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- <link rel="stylesheet" href="../CSS/forgetpass.css"> -->
    <link rel="stylesheet" href="../CSS/all-test.css">
    <title>Forget password</title>
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

        fieldset p {
            font-size: 18px;
        }

        /*end fieldset style  */

        /*strat main icon style */
        svg.fa-lock {
            color: black;
            font-size: 60px;
            background-color: #eeeeee70;
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
            width: 300px;
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
        svg.fa-envelope,
        svg.fa-phone {
            font-size: 18px;
            color: black;
        }

        /*pragraphe style  */
        div.options div.option p.discrip {
            padding-left: 30px;
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
            letter-spacing: 1px;
            font-size: 18px;
        }

        /* end options style */

        /* start verification code style */
        div.write-code {
            width: 300px;
            margin: auto;
            display: none;
        }

        div.write-code label.verfiy-label {
            font-size: 22px;
            font-weight: bold;
        }

        div.write-code p.discrip {
            margin-bottom: 3px;
            margin-bottom: 3px;
            margin-top: -2px;
            font-size: 17px;
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
            letter-spacing: 1px;
            font-size: 17px;
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
            letter-spacing: 1px;
            font-size: 18px;
        }

        /*end reset password input style */
    </style>
</head>

<body>
    <!-- start header -->
    <header class="contianer">
        <!-- <h1 class="lable">zwena</h1> -->
        <!-- test image -->
        <div class="left">
            <img src="../image/logo.png" alt="zwena logo" class="logo-test">
        </div>
        <ul class="nav-links">
            <li class="big-items">
                <a href="../HTML/Home page.php" target="_self" class="sub-items">Home</a>
            </li>
            <li class="big-items">
                <a href="#" target="_self" class="sub-items">About</a>
            </li>
            <li class="big-items">
                <a href="../HTML/Arabic-HTML/forgetpass-ar.php" class="sub-items" target="_self">
                    <img src="../image/eg-logo.png" alt="egypt-logo" class="eg-logo">
                    Arabic
                </a>
            </li>
            <li class="big-items">

                <a href="../HTML/Login.php" class="sub-items" target="_self">
                    <i class="fa-solid fa-user"></i>
                    Login
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
                    <h3 class="ask-user">forget password?</h3>
                    <p class="help-user">dont worry!We will help you<br>recover your password.</p>
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
                            <label for="email" class="email-label">send to your email</label>
                            <i class="fa-solid fa-envelope"></i>
                            <p class="discrip">get a password reset link via<br>to your email.</p>
                        </div>
                        <!--end first option  -->
                        <!--start second option  -->
                        <!-- option one: send code to user by his phone number -->
                        <div class="phone option">
                            <input type="radio" name="option" id="phone">
                            <label for="phone" class="email-label">send to your phone</label>
                            <i class="fa-solid fa-phone"></i>
                            <p class="discrip">get a a security code via<br>SMS to your phone number.</p>
                        </div>
                        <!--end second option  -->
                        <!-- user click her to recive code; 
                        after he click it div "write-code" will be show
                         -->
                        <input type="submit" class="send-code" name="send-code" value="Send Code">
                    </div>
                    <!-- This div will be hidden, 
                        when user select a proper option and click send code it will be showen. 
                    -->
                    <div class="write-code">
                        <label class="verfiy-label">Verification code:</label><br>
                        <p class="discrip">The code you received by mail or phone.</p>
                        <input type="text" class="verification-code" name="verification-code" required minlength="4"
                            maxlength="4">
                        <input type="submit" name="verify" class="verify" value="Verify">
                    </div>

                    <!-- 
                        This div wil be hidden, when user write verify-code and click verify,
                        this div will be showen
                     -->
                    <div class="reset-password">
                        <!-- here user write a new password from 10 - 20 letrer or number  -->
                        <div class="new-pass">
                            <label class="n-pass">New Password:</label><br>
                            <input type="password" required minlength="10" maxlength="20">
                        </div>
                        <!-- here user will repeat password to confit=rm it befor send it. -->
                        <div class="new-pass">
                            <label class="n-pass">Confirm Password:</label><br>
                            <input type="password" required minlength="10" maxlength="20">
                        </div>
                        <!-- when user click here a new password will send and save in database -->
                        <input type="submit" name="submit" class="confirm-pass">
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
                <img src="../image/logo.png" alt="zwena logo" class="logo-test">
                <p class="pref-discrip">Povides services to people with special needs seeking training or work, or both.
                </p>
            </div>
            <div class="sub-div-in-foot info-communication">
                <h4 class="lable l-foot">Information and Communication</h4>
                <a href="../HTML/contact-us.php" class="links-foot call-us" target="_self">CALL US</a>
                <!-- "#" => page does not completed. -->
                <a href="#" class="links-foot policy" target="_self">Terms and Conditions</a>
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

    <!-- -------------------sperator----------------- -->
    <script src="../JS/all.min.js"></script>
</body>

</html>