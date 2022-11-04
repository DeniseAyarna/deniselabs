<?php

require('../controllers/product_controller.php');

//collecting form data 
if(isset($_POST['save'])){
    $cname = $_POST['cname'];
    
   

    $result = insert_category_ctr($cname);

    if($result){
        header("Location: ../admin/category.php");
    } else {
        echo "fail";
    }
}



//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $bname=$_POST['cat_name'];
   

    $result= update_all_categories_ctr($id,$cname);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/category.php");
    }else{
        echo "fail";
    }
}
?>