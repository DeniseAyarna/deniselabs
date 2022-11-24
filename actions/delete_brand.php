<?php
require('../controllers/product_controller.php');

//deleting data from form
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $result = delete_all_records_ctr($id);
    if($result){
        header("Location: ../admin/brand.php");
    } else {
        echo "fail";
    }
    
}
?>
