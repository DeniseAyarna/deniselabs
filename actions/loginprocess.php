<?php
include('../controllers/customer_controller.php');

//updating data

if (isset($_POST['save'])){
  
    $email=$_POST['customer_email'];
    $passwordn=$_POST['customer_password'];
   
    $result= select_one_contact_ctr($email);
    $passcrypt=$result['customer_pass'];
    $error = "incorrect password or email";
    //print_r($result);
    
    if(password_verify($passwordn,$passcrypt)){
        session_start();
        $_SESSION['customer_name']=$result['customer_name'];
        $_SESSION['customer_email']=$result['customer_email'];
        $_SESSION['customer_id']=$result['customer_id'];
        $_SESSION['customer_role']=$result['user_role'];
        
       if ($result['user_role']==1)
            header("location:../admin/index.php");
        
            if ($result['user_role']==2)
            header("location:../index.php");

    }
    else{
        session_start();
        $_SESSION['error']="incorrect password or email";
        header("location:../login/login.php");
        
     }
    
}
?>
