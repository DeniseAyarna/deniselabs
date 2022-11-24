<?php
require('../controllers/product_controller.php');

//deleting data from form
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $result = delete_all_categories_ctr($id);
    if($result){
        header("Location: ../admin/category.php");
    } else {
        echo "fail";
    }
    
}
?>
