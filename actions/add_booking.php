<?php

require('../controllers/cart_controllers.php');


session_start();
  if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])){
    header('location:../login/login.php');
  }
  
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $service=$_POST['service'];
    $date=$_POST['date'];
    $cid= $_SESSION["customer_id"];


    
   
    $convertedDate = str_replace('/', '/', $date );
 
    $myNewDate = date("Y/m/d", strtotime($convertedDate));
    $result = addbooking_ctr($cid, $myNewDate);

    if($result==TRUE){
        header("Location: ../actions/add_servicecart.php?id=".$service);
    } else {
        echo "fail";
    }
}
?>
