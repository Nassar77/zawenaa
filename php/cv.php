    
<?php
    //صفحة الاتصال بقاعدة ال بيانات
    require_once 'config.php';
    require_once 'regist.php';
     //دلة لتنظيف البيانات
    function test_input ($data)
    {
        $data = trim($data);
        $data = stripslashes ($data); 
        $data = htmlspecialchars ($data);
        return $data;
    }
      // start code regist
    
    $rname=$busty=$website=$address=$phone=$C_R=$other_info="";
    if(isset($_POST['req']))
    {
    
        $rname = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $busty= test_input($_POST["business_type"]);
        $website= test_input($_POST["website"]);
        $address= test_input($_POST["address"]);
        $phone= test_input($_POST["phone"]);
        $C_R= test_input($_POST["C_R"]);
        $other_info= test_input($_POST["other_info"]);
        
        
            if($rname!=""&&$busty!=""&&$website!=""&&
            $address!=""&&$phone!=""&&$C_R!=""&&$other_info!="")
            {
                $msg="UPDATE cv_company SET  C_Name='". $rname ."', Website='". $website ."'
                , Address='" .$address ."' , Mobile='". $phone ."' , CRNumber='".$C_R."', OtherInformation=' ". $other_info."'	
                where EmailAddress='".$email."'";
                $conn->query($msg);
            }
        
        if($msg)
        {
            echo "<script>alert('Registered successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'Company-jobs.php'; </script>";
        }
        
        
        
    }
?>