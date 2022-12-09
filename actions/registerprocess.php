<?php

require('../controllers/customer_controller.php');

//collecting form data

if(isset($_POST['save'])){
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $password = password_hash($_POST['customer_pass'],PASSWORD_DEFAULT);
    $country= $_POST['customer_country'];
    $city= $_POST['customer_city'];
    $number = $_POST['customer_contact'];
    $role= 2;


    $result = insert_record_ctr($name,$email,$password,$country,$city,$number,$role);
    echo $result;

    if($result==TRUE){
        header("Location: ../login/login.php");
    } else {
        session_start();
        $_SESSION['error']="User Already Exists";
        header("location:../login/register.php");
}
}



//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $password = $_POST['customer_pass'];
    $country= $_POST['customer_country'];
    $city= $_POST['customer_city'];
    //$number = $_POST['customer_contact'];

    $result= update_all_records_ctr($id,$name,$email,$passworde,$country,$city,$number);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../view/form.php");
    }else{
        echo "fail";
    }
}
?>