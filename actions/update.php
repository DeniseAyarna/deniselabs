<?php
require('../controllers/general_controller.php');

//updating data

if (isset($_POST['updateButton'])){
    $id=$_POST['id'];
    $name=$_POST['pname'];
    $phone=$_POST['pphoned'];
   
    $result= update_all_records_ctr($id,$name,$phone);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../view/form.php");
    }else{
        echo "fail";
    }
}
?>
