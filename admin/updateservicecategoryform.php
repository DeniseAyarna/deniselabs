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
	$servicecategory = select_one_servicecategory_ctr($_GET['updateid']);
}

 ?>
	<h1>Update</h1>





     <form method="POST"  action="../actions/update_servicecategory.php">  
        <div class="form-group">
            <input class="form-control" type="text" placeholder="sname" name="sname"  value="<?php echo $servicecategory['scat_name'] ?>">
        </div>

       
        <input class="form-control" type="hidden"  name="id" value="<?php echo $servicecategory['scat_id'] ?>">


        <input type="submit" name="updateButton">
    </form>
</div>
</body>
</html>
