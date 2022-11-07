<?php
require('../controllers/product_controller.php');

//updating data

if (isset($_GET['updateButton'])){
    $id=$_GET['updateid'];
    $productcat = $_POST['product_cat'];
    $productbrand = $_POST['product_brand'];
    $producttitle = $_POST['product_title'];
    $productprice = $_POST['product_price'];
    $productdesc = $_POST['product_desc'];
    //$productimage = $_POST['product_image'];
    $productkey = $_POST['product_keywords'];
    
   
    $result= update_all_products_ctr($id,$productcat,$productbrand,$producttitle,$productprice,$productdesc,$productimage,$productkeyword);
    if($result==true){
        echo "Update sucessful";
        header("Location: ../admin/product.php");
    }else{
        echo "fail";
    }
}
?>
