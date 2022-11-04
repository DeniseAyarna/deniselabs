<?php
require('../controllers/product_controller.php');

//updating data

if (isset($_POST['updateButton'])){
    $id=$_POST['id'];
    $bname=$_POST['bname'];
  
   
    $result= update_all_records_ctr($id,$bname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/brand.php");
    }else{
        echo "fail";
    }
}
?>
