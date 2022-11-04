<?php
require('../controllers/product_controller.php');

//updating data

if (isset($_POST['updateButton'])){
    $id=$_POST['id'];
    $cname=$_POST['cname'];
  
   
    $result= update_all_categories_ctr($id,$cname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/category.php");
    }else{
        echo "fail";
    }
}
?>
