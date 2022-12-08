<?php

require('../controllers/cart_controllers.php');

session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'] and $_SESSION['customer_role']!=2) ){
  $_SESSION['customer_name'];
 header("location:../login/login.php");
 exit;
 
}




//collecting form data 
if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    $customerid=$_SESSION['customer_id'];
    $customerip=$_SERVER['REMOTE_ADDR'];
    $qty=3;

  
    $result = delete_from_servicecart_ctr($id);

    if($result===TRUE){
        header("Location: ../view/shoping-cart.php?error=Deleted Successfully");
    } else {
        echo "fail";
    }
   }else{
    header("Location: ../view/shoping-cart.php?error=Unable to delete");
   }

   



?>