<?php
require('../controllers/product_controller.php');

//updating data

if (isset($_POST['updateButton'])){
    $id=$_POST['id'];
    $sname=$_POST['sname'];
  
   
    $result= update_all_servicecategories_ctr($id,$sname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/servicecategory.php");
    }else{
        echo "fail";
    }
}
?>
