

<?php

require('../controllers/product_controller.php');

session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'] and $_SESSION['customer_role']!=2) ){
  $_SESSION['customer_name'];
 header("location:../login/login.php");
 exit;
 
}




//collecting form data 
if(isset($_GET['id'])){
    
    $productid=$_GET['id'];
    $customerid=$_SESSION['customer_id'];
    $customerip=$_SERVER['REMOTE_ADDR'];
    $qty=1;

   }

   

    $result = insert_into_cart_ctr($productid,$customerip,$customerid,$qty);

    if($result){
        header("Location: ../view/shoping-cart.php");
    } else {
        echo "fail";
    }

?>