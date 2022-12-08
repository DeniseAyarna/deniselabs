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
	$service = select_one_service_ctr($_GET['updateid']);
}

 ?>
	<h1>Update</h1>




    <form class="form-inline" action ="../actions/updateservice.php" method= "POST" enctype="multipart/form-data">
                      <div class="input-group mb-2 mr-sm-2">

                        

                   
                      
                      <input type="text" class="form-control" name="service_title" id="service_title" placeholder="service Name" value="<?php echo $service['service_title'] ?>">
                     
                      
                      <input type="double" class="form-control" name="service_price" id="service_price" placeholder="GHc"  value="<?php echo $service['service_price'] ?>">
                     
                     
                      <input type="text" class="form-control" name="service_desc" id="service_desc" placeholder="Description"  value="<?php echo $service['service_desc'] ?>">
                      
                  
                      <input type="file" class="form-control" name="service_image" id="service_image"  value="<?php echo $service['service_image'] ?>">
                     
                      
                      <input type="text" class="form-control" name="service_keywords" id="service_keywords" placeholder="keywords"  value="<?php echo $service['service_keywords'] ?>">

                      <input class="form-control" type="hidden"  name="service_id" value="<?php echo $service['service_id'] ?>">
                      
                     
                      
                        <!-- <label for="categories">category</label> -->
                        <select name= "service_cat" aria-placeholder="category" class="form-control" >
                        <option selected>select category</option>
                        <?php
                        $result = select_all_servicecategories_ctr();
                        $i=0;
                        while($i<count($result)){
                        ?>
                         <option value ="<?php echo $result[$i]['scat_id'];?>"> <?php echo $result[$i]['scat_name'];?> </option>
                         <?php
                         $i++;  
                        }
                        ?>
                        </select>
                        </div>
                        <input type="submit" name="updateButton"class="btn btn-primary mb-2" value=Update >
                      <!-- <button type="submit" name="save" class="btn btn-primary mb-2">Update service</button> -->
                      </form>
</div>
</body>
</html>
