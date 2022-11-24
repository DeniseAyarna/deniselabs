<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 require('../controllers/product_controller.php');


if(isset($_GET['updateid'])){
	$product = select_one_product_ctr($_GET['updateid']);
}

 ?>
	<h1>Update</h1>




    <form class="form-inline" action ="../actions/updateproduct.php" method= "POST" enctype="multipart/form-data">
                      <div class="input-group mb-2 mr-sm-2">

                        

                   
                      
                      <input type="text" class="form-control" name="product_title" id="product_title" placeholder="Product Name" value="<?php echo $product['product_title'] ?>">
                     
                      
                      <input type="double" class="form-control" name="product_price" id="product_price" placeholder="GHc"  value="<?php echo $product['product_price'] ?>">
                     
                     
                      <input type="text" class="form-control" name="product_desc" id="product_desc" placeholder="Description"  value="<?php echo $product['product_desc'] ?>">
                      
                  
                      <input type="file" class="form-control" name="product_image" id="product_image"  value="<?php echo $product['product_image'] ?>">
                     
                      
                      <input type="text" class="form-control" name="product_keywords" id="product_keywords" placeholder="keywords"  value="<?php echo $product['product_keywords'] ?>">

                      <input class="form-control" type="hidden"  name="product_id" value="<?php echo $product['product_id'] ?>">
                      
                     
                      <select name= "product_brand" aria-placeholder="brand" class="form-control">
                      <option selected>select Brand</option>
                        <?php
                        $result1= select_all_records_ctr();
                        $i=0;
                        while($i<count($result1)){
                        ?>
                         <option value ="<?php echo $result1[$i]['brand_id'];?>"><?php echo $result1[$i]['brand_name'];?></option>
                         <?php
                         $i++;  
                        }
                        ?>
                      </select>
                        <!-- <label for="categories">category</label> -->
                        <select name= "product_cat" aria-placeholder="category" class="form-control" >
                        <option selected>select category</option>
                        <?php
                        $result = select_all_categories_ctr();
                        $i=0;
                        while($i<count($result)){
                        ?>
                         <option value ="<?php echo $result[$i]['cat_id'];?>"> <?php echo $result[$i]['cat_name'];?> </option>
                         <?php
                         $i++;  
                        }
                        ?>
                        </select>
                        </div>
                        <input type="submit" name="updateButton"class="btn btn-primary mb-2" value=Update >
                      <!-- <button type="submit" name="save" class="btn btn-primary mb-2">Update Product</button> -->
                      </form>
</div>
</body>
</html>
