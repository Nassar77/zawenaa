<?php
    //صفحة الاتصال بقاعدة ال بيانات
    require_once 'config.php';
    
     //دلة لتنظيف البيانات
    function test_input ($data)
    {
        $data = trim($data);
        $data = stripslashes ($data); 
        $data = htmlspecialchars ($data);
        return $data;
    }
      // start code regist
    
    $name=$email=$birth=$phone=$address=$id=$isc=$ty_of_dis =$password=$ty_of_dis1 = $qual = $dis_qual =$op_train=$op_cours="";
    if(isset($_POST['submit']))
    {
        $name = test_input($_POST["name"]);
        $birth = test_input($_POST["birth"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $password = test_input($_POST["pas"]);
        $address = test_input($_POST["address"]);
        $id = test_input($_POST["id"]);
        $isc = test_input($_POST["isc"]);
        $ty_of_dis = test_input($_POST["type_of_disability"]);
        $ty_of_dis1 = test_input($_POST["other_info"]);
        $qual = test_input($_POST["qualification"]);
        $dis_qual = test_input($_POST["dis_qual"]);
        $op_train=test_input($_POST["optained_training"]);
        $op_cours=test_input($_POST["courses"]);
        
        if($name!=""&&$birth!=""&&$email!=""&&$phone!=""&&$address!=""&&$id!=""&&$isc!=""&&
        $ty_of_dis!=""&& $qual!=""&& $op_train!=""&& $op_cours!="" )
        {
            $msg="INSERT INTO cv_employee   ( User_Name , date_of_birth ,Email,password, Phone ,
            Address , id , Services_card , Disability ,Qualification  , Training ,courses )
            VALUES('". $name ."','". $birth ."','". $email ."','". $password."','". $phone."','". $address ."',
            '". $id ."','". $isc ."','". $ty_of_dis ."','". $qual ."','". $op_train ."','". $op_cours ."')";
            $conn->query($msg);
        }
        
        if($msg)
        {
            echo "<script>alert('Registered successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'user-jobs.php'; </script>";
        }
    }