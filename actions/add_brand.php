<?php

require('../controllers/product_controller.php');

//collecting form data 
if(isset($_POST['save'])){
    $bname = $_POST['bname'];
    
   

    $result = insert_record_ctr($bname);

    if($result){
        header("Location: ../admin/brand.php");
    } else {
        echo "fail";
    }
}



//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $bname=$_POST['brand_name'];
   

    $result= update_all_records_ctr($id,$bname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/brand.php");
    }else{
        echo "fail";
    }
}
?>