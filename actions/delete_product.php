
<?php
require('../controllers/product_controller.php');

//deleting data from form
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $result = delete_all_products_ctr($id);
    if($result){
        header("Location: ../admin/product.php");
    } else {
        echo "fail";
    }
    
}
?>

