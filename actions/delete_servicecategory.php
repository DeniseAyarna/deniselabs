<?php
require('../controllers/product_controller.php');

//deleting data from form
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $result = delete_all_servicecategories_ctr($id);
    if($result){
        header("Location: ../admin/servicecategory.php");
    } else {
        echo "fail";
    }
    
}
?>
