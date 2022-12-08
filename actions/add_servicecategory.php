<?php

require('../controllers/product_controller.php');

//collecting form data 
if(isset($_POST['save'])){
    $sname = $_POST['sname'];
    
   

    $result = insert_servicecategory_ctr($sname);

    if($result){
        header("Location: ../admin/servicecategory.php");
    } else {
        echo "fail";
    }
}



//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $sname=$_POST['scat_name'];
   

    $result= update_all_servicecategories_ctr($id,$sname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/servicecategory.php");
    }else{
        echo "fail";
    }
}
?>