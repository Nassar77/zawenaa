
<?php

    //صفحة الاتصال بقاعدة ال بيانات
    require_once 'config.php';
    
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
        if(isset($_POST['Submit'])){
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
            if($name!=""&&$email!=""&&$pass!=""&&$option!=""){
                    $msg="INSERT INTO cv_company ( UserName,EmailAddress,Password,BusinessTybe)
                    VALUES( '". $name ."','". $email ."','". $pass ."','". $option ."')";
                    $conn->query($msg);
                
                
                if($option=="employe")
                echo "<script type='text/javascript'> document.location = 'user-cv.php'; </script>";
                else 
                echo "<script type='text/javascript'> document.location = 'Company-cv.php'; </script>";
            }

            
        }


//***************************************************************************** */
    //صفحة الاتصال بقاعدة البيانات
    
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
    
    
    if(isset($_POST['req'])){
        
        $rname = test_input($_POST["name"]);
        $busty= test_input($_POST["business_type"]);
        $website= test_input($_POST["website"]);
        $address= test_input($_POST["address"]);
        $phone= test_input($_POST["phone"]);
        $C_R= test_input($_POST["C_R"]);
        $other_info= test_input($_POST["other_info"]);
        
        
        $sql="select CRNumber from cv_company  where CRNumber='$C_R'";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            echo "<script>alert('Nation id already exist with another account. Please try with other nation id');</script>";
        }
        
        else{
            if($rname!=""&&$busty!=""&&$website!=""&&
            $address!=""&&$phone!=""&&$C_R!=""&&$other_info!=""){
                $msg="UPDATE cv_company SET  Website='". $website ."'
                , Address='" .$address ."' , Mobile='". $phone ."' , CRNumber='".$C_R."', OtherInformation=' ". $other_info."'	
                where EmailAddress='".$rname."'";
                $conn->query($msg);
            }
        }
        if($msg)
        {
            echo "<script>alert('Registered successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'Company-jobs.php'; </script>";
        }
    }
    
    //***************************************** */