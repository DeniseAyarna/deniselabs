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

   }

   $check = select_product_cart_ctr($id);

   if($check['p_id']!=$id){
    $result = insert_into_cart_ctr($id,$customerip,$customerid,$qty);

    if($result===TRUE){
        header("Location: ../view/all_products.php?error=Added Successfully");
    } else {
        echo "fail";
    }
   }else{
    header("Location: ../view/all_products.php?error=The Item is already in your cart");
   }

   

?>