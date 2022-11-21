<?php

require('../controllers/cart_controllers.php');

session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'] and $_SESSION['customer_role']!=1) ){
  $_SESSION['customer_name'];
 header("location:../login/login.php");
 exit;
 
}

?>

<?php
//collecting form data 
if(isset($_GET['id'])){
    
    $id =$_GET['id'];
    $customerid=$_SESSION['customer_id'];
    //$customerip=$_SERVER['REMOTE_ADDR'];
    $qty=1;

   

    $result = add_quantity_ctr($id, $customerid);

    if($result===TRUE){
        header("Location: ../view/shoping-cart.php");
   
   }
 else echo "fail";
}


?>