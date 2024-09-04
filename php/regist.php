<?php
    
//صفحة الاتصال بقاعدة البيانات
    require_once 'config.php';
    // require_once 'cv.php';
    //دلة لتنظيف البيانات
    function tes_input ($data)
    {
        $data = trim($data);
        $data = stripslashes ($data); 
        $data = htmlspecialchars ($data);
        return $data;
    }
    // start code regist
    $name=$email=$pass=$copass=$option="";
    if(isset($_POST['Submit']))
    {
        $name = tes_input($_POST["name"]);
        $email = tes_input($_POST["email"]);
        $pass = tes_input($_POST["pass"]);
        $copass = tes_input($_POST["copass"]);
        $option = tes_input($_POST["major"]);
        
        if($pass!=$copass)
        {
            $check=0;
            echo "<script>alert('the confirm password not smiler password');</script>";
            echo "<script type='text/javascript'> document.location = 'registration.php'; </script>";
        }
        if($name!=""&&$email!=""&&$pass!=""&&$option!=""&&$option!="employe")
        {
            $msg="INSERT INTO cv_company ( UserName,EmailAddress,Password,BusinessTybe)
            VALUES( '". $name ."','". $email ."','". $pass ."','". $option ."')";
            $conn->query($msg);
            $_SESSION['email']=$email;
        }
        if($option=="employe")
            echo "<script type='text/javascript'> document.location = 'user-cv.php'; </script>";
            else 
            echo "<script type='text/javascript'> document.location = 'Company-cv.php'; </script>";
    }
?>