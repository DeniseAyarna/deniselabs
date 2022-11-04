<?php

require('../controllers/general_controller.php');

//collecting form data 
if(isset($_POST['save'])){
    $username = $_POST['fname'];
    $number = $_POST['pname'];
   

    $result = insert_record_ctr($username, $number);

    if($result){
        header("Location: ../view/form.php");
    } else {
        echo "fail";
    }
}



//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $name=$_POST['pname'];
    $phone=$_POST['pphoned'];

    $result= update_all_records_ctr($id,$name,$number);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../view/form.php");
    }else{
        echo "fail";
    }
}
?>